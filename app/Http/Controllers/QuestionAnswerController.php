<?php

namespace App\Http\Controllers;

use App\Models\Election;
use App\Models\User;
use App\Models\Ballot;
use App\Models\BallotQuestion;
use Illuminate\Http\Request;

class QuestionAnswerController extends Controller
{
    //

    public function create($id)
    {
        $elec=Election::with('user')->where('id', $id)->get()->toArray();
        $election= Election::where('id', $id)->value('election_nm');
        $ballot=Ballot::where('election_id', $id)->value('id');
        $ballot_question=BallotQuestion::with('quesOpt')->where('ballot_id', $ballot)->get()->toArray();
        // dd($ballot_question);
        return view('questionAnswer.index', compact('ballot_question', 'elec', 'election'));
    }

    public function store()
    {

    }
}
