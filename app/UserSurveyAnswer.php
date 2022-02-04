<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserSurveyAnswer extends Model
{
    use SoftDeletes;

    protected $fillable = ['answers', 'user_survey_id'];

    public function userSurvey(){
        return $this->belongsTo(UserSurvey::class, "user_survey_id");
    }
}
