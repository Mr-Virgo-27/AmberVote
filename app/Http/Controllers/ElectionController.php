<?php

namespace App\Http\Controllers;

use App\Models\Election;
use Illuminate\Http\Request;

class ElectionController extends Controller
{
    public function ElectionIndex()
    {
        $elections = Election::where('user_id', auth()->user()->id)->get();
        return view('election.index', compact('elections'));
    }

    public function AddElection()
    {
        return view('election.create');
    }

    public function ElectionStore(Request $req)
    {
        Election::create([
            'election_nm' => $req->election_nm,
            'start_date' => $req->start,
            'end_date' => $req->end,
            'desc' => $req->desc
        ]);

        return redirect()->route('Election.Index');
    }
}
