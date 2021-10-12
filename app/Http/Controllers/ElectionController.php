<?php

namespace App\Http\Controllers;

use App\Models\Election;
use Illuminate\Http\Request;
use Auth;

class ElectionController extends Controller
{
    public function electionIndex()
    {
        $elections = Election::where('user_id', auth()->user()->id)->orderBy('election_nm','asc')->get();
        $created = Election::where('user_id', auth()->user()->id)->get('created_at');
        return view('election.index', compact('elections','created'));
    }

    public function addElection()
    {
        return view('election.create');
    }

    public function electionStore(Request $req)
    {
        $req->validate([
            'election_nm'=>'required | unique:elections,election_nm'
        ],[
            'election_nm.required'=>'Election Name is required',
            'election_nm.unique'=>'Election already exist'
        ]);
        Election::create([
            'user_id' => Auth::user()->id,
            'election_nm' => $req->election_nm,
            'start_date' => $req->start,
            'end_date' => $req->end,
            'desc' => $req->desc
        ]);

        return redirect()->route('Election.Index');
    }

    public function show($id)
    {
        $election = Election::find($id);
        return view('election.show', compact('election'));
    }
}
