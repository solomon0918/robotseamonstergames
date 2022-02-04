<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use SoftDeletes;

    protected $fillable = ["first_name", "last_name"];
    protected $hidden = ["id", "created_at", "deleted_at"];

    public function surveys(){
        return $this->hasMany(UserSurvey::class);
    }
}
