<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BallotQuestion;
use App\Models\Election;
use Auth;

class BallotQuestionController extends Controller
{
    //Add Ballot question
    public function BQ(){
        return view('ballotQuestion.AddBallotQuestion');
    }
    public function AddBQ(Request $request){

        $this->validate($request,[
            'question' => 'Required'
        ]);

//       $d= Election::where('user_id','=',Auth::User()->id)->get('id');
//dd($d);
        BallotQuestion::create([
            'ballot_id',
            'question' => $request->question,
            'max_res',
            'min_res',
            'desc'
        ]);
//        return view('ballotQuestion.AddBallotQuestion');
        return view('ballotOption.AddBallotOption');
    }
    public function ViewBQ(){
        $data = BallotQuestion::all();
//        dd($data);
        return view('ballotQuestion.index',compact('data'));
    }

    public function ViewUpdateBQ($id){
        $data = BallotQuestion::find($id);
//        dd($data);
        return view('ballotQuestion.UpdateBallotQuestion',compact('data'));
    }

    public function UpdateBQ(Request $request){

        BallotQuestion::find($request->id)->update([
            'question' => $request->question,
        ]);
        return redirect()->back()->with('update','Successfully updated');
    }

    public function DeleteBQ(Request $request){

        BallotQuestion::find($request->id)->delete();
        return redirect()->back()->with('delete','Successfully Deleted');
    }

}
