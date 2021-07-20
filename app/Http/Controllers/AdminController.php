<?php

namespace App\Http\Controllers;

use App\AnswerNo;
use App\QuestionNo;
use Illuminate\Http\Request;
use App\Answer;
use App\QuestionYes;

class AdminController extends Controller
{
    public function index($page = null)
    {
        $answers      = Answer::get();
        $answers_no   = AnswerNo::get();
        $questions    = QuestionYes::all();
        $questions_no = QuestionNo::all();

        if ($page == null) {
            return view('admin.answer', compact([
                'answers',
                'questions'
            ]));
        }
        elseif ($page == 'no') {
            return view('admin.answer_no', compact([
                'answers_no',
                'questions_no'
            ]));
        }
        return response('', 404);
    }

    public function addAnswer(Request $request)
    {
        $answer           = new Answer();
        $answer->patasxan = $request->patasxan;
        $answer->type     = $request->type;
        $answer->harc_id  = $request->harc_id;
        $answer->save();
        return redirect()->back();
    }

    public function addAnswerNo(Request $request)
    {
        $answer           = new AnswerNo();
        $answer->patasxan = $request->patasxan;
        $answer->type     = $request->type;
        $answer->harc_id  = $request->harc_id;
        $answer->save();
        return redirect()->back();
    }

    public function deleteAnswer($id)
    {
        $answer = Answer::find($id);
        $answer->delete();
        return redirect()->back();
    }

    public function deleteAnswerNo($id)
    {
        $answer = AnswerNo::find($id);
        $answer->delete();
        return redirect()->back();
    }

    public function editAnswer($id)
    {
        $answer        = Answer::with('questionYes')->where('id', $id)->first();
        $questions_yes = QuestionYes::get();
        $questions     = [];
        foreach ($questions_yes as $key => $v) {
            $questions[$v->id] = $v->question;
        }
        if (array_key_exists($answer->questionYes['id'], $questions)) {
            unset($questions[$answer->questionYes['id']]);
        }

        return view('admin.update_answer', compact([
            'answer',
            'questions'
        ]));
    }

    public function editAnswerNo($id)
    {
        $answer       = AnswerNo::with('questionNo')->where('id', $id)->first();
        $questions_no = QuestionNo::get();
        $questions    = [];
        foreach ($questions_no as $key => $v) {
            $questions[$v->id] = $v->question;
        }
        if (array_key_exists($answer->questionNo['id'], $questions)) {
            unset($questions[$answer->questionNo['id']]);
        }

        return view('admin.update_answer_no', compact([
            'answer',
            'questions'
        ]));
    }

    public function updateAnswer(Request $request)
    {
        $id = $request->id;
        Answer::where('id', $id)->update([
            'patasxan' => $request->patasxan,
            'type'     => $request->type,
            'harc_id'  => $request->harc_id
        ]);
        return redirect()->back();
    }

    public function updateAnswerNo(Request $request)
    {
        $id = $request->id;
        AnswerNo::where('id', $id)->update([
            'patasxan' => $request->patasxan,
            'type'     => $request->type,
            'harc_id'  => $request->harc_id
        ]);
        return redirect()->back();
    }

    public function redirectQuestion($page = null)
    {
        if ($page == 'yes') {
            $questions = QuestionYes::all();
            return view('admin.question_yes', compact([
                'questions'
            ]));
        }
        elseif ($page == 'no') {
            $questions = QuestionNo::all();
            return view('admin.question_no', compact([
                'questions'
            ]));
        }
        return response('', 404);
    }

    public function addQuestionYes(Request $request)
    {
        $question           = new QuestionYes();
        $question->question = $request->question;
        $question->save();
        return redirect()->back();
    }


    public function addQuestionNo(Request $request)
    {
        $question           = new QuestionNo();
        $question->question = $request->question;
        $question->save();
        return redirect()->back();
    }
    public function deleteQuestionYes($id)
    {
        $question = QuestionYes::find($id);
        $question->delete();
        return redirect()->back();
    }

    public function deleteQuestionNo($id)
    {
        $question = QuestionNo::find($id);
        $question->delete();
        return redirect()->back();
    }

    public function editQuestionYes($id)
    {
        $question = QuestionYes::find($id);

        return view('admin.update_question_yes', compact([
            'question'
        ]));
    }
    public function editQuestionNo($id)
    {
        $question = QuestionNo::find($id);

        return view('admin.update_question_no', compact([
            'question'
        ]));
    }

    public function updateQuestionYes(Request $request)
    {
        $id = $request->id;
        QuestionYes::where('id',$id)->update([
            'question'=>$request->question
        ]);
        return redirect()->back();
    }

    public function updateQuestionNo(Request $request)
    {
        $id = $request->id;
        QuestionNo::where('id',$id)->update([
            'question'=>$request->question
        ]);
        return redirect()->back();
    }
}
