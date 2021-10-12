<?php

namespace App\Http\Controllers;

use App\Models\BallotMsg;
use Illuminate\Http\Request;

class BallotMsgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('ballotMsg.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BallotMsg  $ballotMsg
     * @return \Illuminate\Http\Response
     */
    public function show(BallotMsg $ballotMsg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BallotMsg  $ballotMsg
     * @return \Illuminate\Http\Response
     */
    public function edit(BallotMsg $ballotMsg)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BallotMsg  $ballotMsg
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BallotMsg $ballotMsg)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BallotMsg  $ballotMsg
     * @return \Illuminate\Http\Response
     */
    public function destroy(BallotMsg $ballotMsg)
    {
        //
    }
}
