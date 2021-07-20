<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionYes extends Model
{
    public $table = 'questions_yes';
    public $timestamps=false;


    public function answers()
    {
        return $this->hasMany(Answer::class,'harc_id');
    }
}
