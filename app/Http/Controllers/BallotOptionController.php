<?php

namespace App\Http\Controllers;

use App\Models\BallotQuestion;
use Illuminate\Http\Request;
use App\Models\BallotOption;

class BallotOptionController extends Controller
{
    //Add Ballot Option
    public function BO(){
        $data = BallotQuestion::all();
        return view('ballotOption.AddBallotOption',compact('data'));
    }

    public function AddBO(Request $request){
        $this->validate($request,[

            'option',
            'max_res',
            'min_res',
            'photo',
            'desc'
        ]);

        $photo = $request->file('photo')->getClientOriginalName();
        $request->file('photo')->move('images',$photo);
//         dd($photo);
        BallotOption::create([
            'question_id' => $request->quest_id,
            'option' => $request->option,
            'max_res' => $request->max_res,
            'min_res' => $request->min_res,
            'photo' => $photo,
            'desc' => $request->desc
        ]);
        return redirect()->back();
    }

    public function ViewBO(){
        $data = BallotOption::with('BallotQuestions')->get();
//        dd($data);
        return view('ballotOption.index',compact('data'));
    }
    public function ViewUpdateBO($id){
        $data = BallotOption::find($id);
//        dd($data);
        return view('ballotOption.UpdateBallotOption',compact('data'));
    }

    public function UpdateBO(Request $request){
//        dd($request->photo);
        $this->validate($request,[
            'photo'=>'required'
        ]);
        $photo = time().$request->file('photo')->getClientOriginalName();
        $request->file('photo')->move('images',$photo);
//         dd($photo);
//        dd($request->quest_id);
        BallotOption::find($request->quest_id)->update([
//            'question_id' => $request->option,
            'option' => $request->option,
            'max_res' => $request->max_res,
            'min_res' => $request->min_res,
            'photo' => $photo,
            'desc' => $request->desc
        ]);
        return redirect()->back()->with('update','Successfully updated');
    }
    function delete($id){
        BallotOption::destroy($id);
        return redirect()->back()->with('delete','Successfully Deleted');
    }
}
