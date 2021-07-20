<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\QuestionYes;

class AnswerNo extends Model
{
    public $table = "answers_no";
    public $timestamps=false;


    public function questionNo()
    {
        return $this->belongsTo(QuestionNo::class,'harc_id');
    }
}
