<?php

namespace App\Http\Controllers;

use App\Models\Ballot;
use App\Models\Election;
use Illuminate\Http\Request;

class BallotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $election = Election::find($id);

        return view('ballots.index', compact('election'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $election = Election::find($id);

        return view('ballots.create', compact('election'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Ballot::create([
            'ballot_type' => $request->ballot_type,
            'election_id' => $request->election_id,
            'desc'=>'none'
        ]);
        return redirect()->route('BQ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ballot  $ballot
     * @return \Illuminate\Http\Response
     */
    public function show(Ballot $ballot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ballot  $ballot
     * @return \Illuminate\Http\Response
     */
    public function edit(Ballot $ballot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ballot  $ballot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ballot $ballot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ballot  $ballot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ballot $ballot)
    {
        //
    }
}
