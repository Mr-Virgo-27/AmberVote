<?php

namespace App\Http\Controllers;

use App\Models\Ballot;
use App\Models\Election;
use App\Models\BallotQuestion;
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
    public function store($id)
    {
        $check=Ballot::where('election_id',$id)->count();
//        dd($check);
        if($check==1){
            return redirect()->back()->with('Error','Election ballot already exist:One Ballot per Election');
        }
//        $this->validate($request,[
//            'election_id' => 'unique:ballots,election_id'
//        ],[
//            'election_id.unqiue'=>'Ballot already exits'
//        ]);

        Ballot::create([
            'ballot_type' => 'Multiple Choice',
            'election_id' => $id,
            'desc'=>'none'
        ]);
        $ballot_id=Ballot::where('election_id','=',$id)->get();
       foreach($ballot_id as $id){
           $ballot_id=$id->id;
       }
        $displayBQ=[];
        return redirect()->route('BQ',$ballot_id);

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
