<?php

namespace App\Http\Controllers;

use App\Models\Election;
use App\Models\User;
use App\Models\Ballot;
use App\Models\QuestionAnswer;
use App\Models\BallotQuestion;
use Illuminate\Http\Request;

class QuestionAnswerController extends Controller
{
    //

    public function index()
    {
        return view('questionAnswer.index');
    }

    public function create($id)
    {
        $elec = Election::with('user')->where('id', $id)->get()->toArray();
        $election = Election::where('id', $id)->value('election_nm');
        $ballot = Ballot::where('election_id', $id)->value('id');
        $ballot_question = BallotQuestion::with('quesOpt')->where('ballot_id', $ballot)->get()->toArray();
        $max_res = BallotQuestion::with('quesOpt')->where('ballot_id', $ballot)->value('max_res');
        // dd($max_res);
        return view('questionAnswer.create', compact('ballot_question', 'elec', 'election', 'ballot', 'max_res'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $ballot_count= BallotQuestion::where('ballot_id', $request->ballot_id)->count();
    //  dd($ballot_count);
      for ($i=1;$i<=$ballot_count; $i++) {
        QuestionAnswer::create([
            'voter_id'=>auth()->user()->id,
            'ballot_question_id'=>$request->ballot_question_id.$i,
            'answer'=>$request->answer.$i,
        ]);
    }
    return redirect()->back();

    }
}
