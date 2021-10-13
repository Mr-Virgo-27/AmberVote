<?php

namespace App\Http\Controllers;

use App\Models\Ballot;
use App\Models\Election;
use Illuminate\Http\Request;
use Auth;

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
        $req->validate([
            'election_nm' => 'required',
            'start' => 'required|date',
            'end' => 'required|date',
            'desc' => 'required'
        ]);

        Election::create([
            'user_id' => Auth::id(),
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
        $ballot = Ballot::where('election_id', $id)->get()[0];
        return view('election.show', compact('election', 'ballot'));
    }

    public function edit($id)
    {
        $election = Election::find($id);
        return view('election.edit', compact('election'));
    }

    public function update(Request $req, $id)
    {
        $req->validate([
            'election_nm' => 'required',
            'start' => 'required|date',
            'end' => 'required|date',
            'desc' => 'required'
        ]);

        Election::find($id)->update([
            'user_id' => Auth::id(),
            'election_nm' => $req->election_nm,
            'start_date' => $req->start,
            'end_date' => $req->end,
            'desc' => $req->desc
        ]);

        return redirect()->route('election.show', $id);
    }

    public function destroy($id)
    {
        Election::destroy($id);
        return redirect()->route('Election.Index');
    }
}
