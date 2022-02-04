<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SurveyQuestion extends Model
{
    use SoftDeletes;

    protected $fillable = [];
    protected $hidden = ["created_at", "deleted_at"];

    public function type(){
        return $this->belongsTo(LkFieldType::class, "lk_field_type_id");
    }

    public function survey(){
        return $this->hasOne(Survey::class);
    }
}
