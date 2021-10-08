<?php

namespace App\Http\Controllers;

use App\Models\voter;

use Illuminate\Http\Request;

class VoterController extends Controller
{
    function index(){
        // echo "I am okay";
        return view('voter/index');
        // return redirect()->route('AddVoterIndex');
    }
    function addvoter(Request $req){
        $req->validate([
            'voter_nm'=>'required | unique:voters,voter_nm',
            'email'=>'required | email | unique:voters,email',
            'valid_id'=>'nullable',
            'phone_num'=>'required | unique:voters,phone_num',
            'unique_id'=>'required | unique:voters,unique_id',
            'unique_key'=>'required | unique:voters,unique_id',
        ],[
            'voter_nm.required'=>'Voter Name is required.',
            'email.required'=>'Email is required.',
            'unique_id.required'=>'Unique ID is required.',
            'unique_key.required'=>'Unique Key is required.',
            'phone_num.required'=>'Phone Number is required.',
            'voter_nm.unique'=>'Voter Name already exist.',
            'email.unique'=>'Email already exist.',
            'unique_id.unique'=>'Unique ID already exist.',
            'unique_key.unique'=>'Unique Key already exist.',
            'phone_num.unique'=>'Phone Number already exist.'
        ]);

        voter::create([
            'voter_nm'=>$req->voter_nm,
            'email'=>$req->email,
            'valid_id'=>$req->valid_id,
            'unique_id'=>$req->unique_id,
            'unique_key'=>$req->unique_key,
            'phone_num'=>$req->phone_num
        ]);

        return redirect()->back()->with('Success','Voter Added');
    }
}
