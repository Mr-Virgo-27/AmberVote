<?php

namespace App\Http\Controllers;

use App\Models\Election;
use Illuminate\Http\Request;
use Auth;

class ElectionController extends Controller
{
    public function electionIndex()
    {
        $elections = Election::where('user_id', auth()->user()->id)->get();
        return view('election.index', compact('elections'));
    }

    public function addElection()
    {
        return view('election.create');
    }

    public function electionStore(Request $req)
    {
        Election::create([
            'user_id' => Auth::User()->id,
            'election_nm' => $req->election_nm,
            'start_date' => $req->start,
            'end_date' => $req->end,
            'desc' => $req->desc
        ]);

        return redirect()->route('election.Index');
    }
}
