<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\QuestionYes;


class Answer extends Model
{
    public $table = "answers";
    public $timestamps=false;


    public function questionYes()
    {
        return $this->belongsTo(QuestionYes::class,'harc_id');
    }

}
