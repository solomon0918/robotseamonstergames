<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserSurveyRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use App\Survey;
use App\SurveyQuestion;
use App\User;
use App\UserSurvey;
use App\UserSurveyAnswer;

class UserSurveyController extends ApiController
{
    /**
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $survey = Survey::findOrFail($request->input('survey'));
        $questions = $survey->questions;
        $ids = [];
        $rules = [];

        //Check questions if exists and retrieve question rules
        foreach($request->all() as $key => $value){
            if(strpos($key, 'field_') !== false){
                $id = explode('field_', $key)[1];
                $question = SurveyQuestion::where("id", $id)->first();
                if(empty($question)){
                    return $this->invalid("Question not found");
                }

                if($question->rules){
                    $rules = array_merge($rules, [$key => $question->rules]);
                }
                $ids = array_merge($ids, [$key => $id]);
            }
        }

        //Validate all requests based on retireved rules from questions
        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            return $this->invalid($validator->messages());
        }

        //Check answers
        $errors = [];
        foreach($ids as $key => $id){
            $question = SurveyQuestion::where("id", $id)->first();
            
            if(!empty($question->answers)){
                $answer = $request->input($key);
                $answers = json_decode($question->answers);

                // Is JSON
                if($answers[0]){
                    foreach ($answers as $value) {
                        if(!Str::contains($answer, $value)){
                            $errors = array_merge($errors, [$key => "Incorrect answer"]);
                            break;
                        }
                    }
                }
                // Not JSON
                else{
                    if($answer !== $question->answers){
                        $errors = array_merge($errors, [$key => "Incorrect answer"]);
                    }
                }
            }
        }

        if(count($errors) > 0){
            return $this->invalid($errors);
        }

        //Store Actions
        $user = User::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name')
        ]);

        $userSurvey = UserSurvey::create([
            'user_id' => $user->id,
            'survey_id' => $survey->id
        ]);

        foreach($ids as $key => $id){
            UserSurveyAnswer::create([
                'answers' => $request->input($key),
                'user_survey_id' => $userSurvey->id
            ]);
        }

        return $this->success();
    }
}
