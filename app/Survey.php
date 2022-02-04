<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Survey extends Model
{
    use SoftDeletes;

    protected $fillable = ["name", "survey_question_id"];
    protected $hidden = ["created_at", "updated_at", "deleted_at"];
    // protected $with = ['questions'];

    public function questions(){
        return $this->hasMany(SurveyQuestion::class);
    }

    public function userSurveys(){
        return $this->hasOne(UserSurvey::class);
    }
}
