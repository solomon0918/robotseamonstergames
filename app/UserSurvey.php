<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserSurvey extends Model
{
    use SoftDeletes;

    protected $fillable = ['user_id', 'survey_id'];
    protected $hidden = [];

    public function user(){
        return $this->belongsTo(User::class, "user_id");
    }

    public function survey(){
        return $this->belongsTo(Survey::class, "survey_id");
    }

    public function userAnswer(){
        return $this->hasMany(UserSurveyAnswer::class);
    }
}
