<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LkFieldType extends Model
{
    protected $cases = ['rules' => 'json'];

    public function questions(){
        return $this->hasMany(SurveyQuestion::class);
    }
}
