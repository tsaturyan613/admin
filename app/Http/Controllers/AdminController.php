<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;
use App\QuestionYes;

class AdminController extends Controller
{
    public function index()
    {
        $answers = Answer::get();
        $questions = QuestionYes::all();

        return view('admin.answer', compact([
            'answers',
            'questions'
        ]));
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

    public function deleteAnswer($id)
    {
        $answer = Answer::find($id);
        $answer->delete();
        return redirect()->back();
    }

    public function editAnswer($id)
    {
        $answer        = Answer::with('questionYes')->where('id', $id)->first();
        $questions_yes = QuestionYes::get();
        $questions        = [];
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
}
