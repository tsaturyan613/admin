<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use App\Subscribe;
use App\QuestionYes;
use App\Option;
use App\Answer;
use App\Patasxan;
use Illuminate\Http\Request;
use Validator;

class OpinionController extends Controller
{

    public function index($page = null)
    {
        $query = QuestionYes::with('answers')->get();
        $data  = ['questions'];
        if ($page == null) {
            $page      = 0;
            $count     = $page + 1;
            $questions = [];
            for ($i = $page; $i <= $count; $i++) {
                $questions[] = $query[$i];
            }
            return view('opinion.opinion', compact($data));

        }
        elseif ($page == '2') {
            $count     = $page + 2;
            $questions = [];
            for ($i = $page; $i <= $count; $i++) {
                $questions[] = $query[$i];
            }

            return view('opinion.opinion2', compact($data));

        }
        else {
            $count     = $page + 1;
            $questions = [];
            for ($i = $page; $i <= $count; $i++) {
                $questions[] = $query[$i];
            }
            return view('opinion.opinion3', compact($data));
        }

    }

    public function yesPages($page = null)
    {
//        $query = QuestionYes::with('answers')->get();
//        $data  = ['questions'];
        $questions = QuestionYes::get();
//        $last_number = QuestionYes::orderBy('id','desc')->first();

//        echo $last_number;
//        die();



//        $option    = Option::get();
        $answer_ ='';
for ($i = 2; $i <= 9 ; $i++){
//    print_r($questions[$i]['id']);

    if (isset($answer_)){
        $answer_.$i = Answer::where('harc_id', $questions[$i]['id'])->first();
    }

//    print_r($answer_.$i);die();
}

//        $id_2 = $questions[2]['id'];
//        $id_3 = $questions[3]['id'];
//        $id_4 = $questions[4]['id'];
//        $id_5 = $questions[5]['id'];
//        $id_6 = $questions[6]['id'];
//        $id_7 = $questions[7]['id'];
//        $id_8 = $questions[8]['id'];
//        $id_9 = $questions[9]['id'];
//
//        $answer_2 = Answer::where('harc_id', $id_2)->get();
//        $answer_3 = Answer::where('harc_id', $id_3)->get();
//        $answer_4 = Answer::where('harc_id', $id_4)->get();
//        $answer_5 = Answer::where('harc_id', $id_5)->get();
//        $answer_6 = Answer::where('harc_id', $id_6)->get();
//        $answer_7 = Answer::where('harc_id', $id_7)->get();
//        $answer_8 = Answer::where('harc_id', $id_8)->get();
//        $answer_9 = Answer::where('harc_id', $id_9)->get();

        if ($page == null) {
            return view('opinion.opinion_yes', compact([
                'questions',
                'answer_2',
                'answer_3',
                'option'
            ]));
        }
        elseif ($page == 2) {
            return view('opinion.opinion_yes2', compact([
                'questions',
                'answer_4',
                'answer_5',
                'option'
            ]));
        }
        elseif ($page == 3) {
            return view('opinion.opinion_yes3', compact([
                'questions',
                'answer_6',
                'answer_7',
                'option'
            ]));
        }
        else {
            return view('opinion.opinion_yes4', compact([
                'questions',
                'answer_8',
                'answer_9',
                'option'
            ]));
        }
    }

    public function insertOneLevel(Request $request)
    {

        $question1   = $request->question1;
        $question2   = $request->question2;
        $questionNo3 = $request->questionNo3;
        $questionNo4 = $request->questionNo4;
        $questionNo5 = $request->questionNo5;
        $arr         = [];

        array_push($arr,
            $question1,
            $question2,
            $questionNo3,
            $questionNo4,
            $questionNo5);
        $str = serialize($arr);

        if (!empty($questionNo3)) {
            Patasxan::create(['patasxanner' => $str]);
        }
    }

    public function insertTwoLevel()
    {
        $question1     = $_POST['question1'];
        $question2     = $_POST['question2'];
        $questionYes1  = $_POST['questionYes1'];
        $questionYes2  = $_POST['questionYes2'];
        $questionYes3  = $_POST['questionYes3'];
        $tachers       = $_POST['teachers'];
        $questionYes7  = $_POST['questionYes7'];
        $questionYes8  = $_POST['questionYes8'];
        $questionYes9  = $_POST['questionYes9'];
        $questionYes10 = $_POST['questionYes10'];
        $arr           = [];
        array_push($arr,
            $question1,
            $question2,
            $questionYes1,
            $questionYes2,
            $questionYes3,
            $tachers,
            $questionYes7,
            $questionYes8,
            $questionYes9,
            $questionYes10);
        $str = serialize($arr);
        if (!empty($questionYes9)) {
            Patasxan::create(['patasxanner' => $str]);
        }
    }

}
