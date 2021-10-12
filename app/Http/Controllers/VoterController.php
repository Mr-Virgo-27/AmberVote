<?php

namespace App\Http\Controllers;

use App\Models\voter;
use App\Rules\FullName;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VoterController extends Controller
{
    public $unique_id;
    public $unique_key;

    function create()
    {
        // echo "I am okay";
        return view('voter/create');
        // return redirect()->route('AddVoterIndex');
    }
    function addvoter(Request $req)
    {
        $req->validate([
            'voter_nm' => ['required', new FullName],
            'email' => 'required | email | unique:voters,email',
            'valid_id' => 'nullable',
            'phone_num' => 'required | unique:voters,phone_num',
            // 'unique_id' => 'required | unique:voters,unique_id',
            // 'unique_key' => 'required | unique:voters,unique_id',
        ], [
            'voter_nm.required' => 'Voter Name is required.',
            'email.required' => 'Email is required.',
            // 'unique_id.required' => 'Unique ID is required.',
            // 'unique_key.required' => 'Unique Key is required.',
            'phone_num.required' => 'Phone Number is required.',
            'voter_nm.unique' => 'Voter Name already exist.',
            'email.unique' => 'Email already exist.',
            // 'unique_id.unique' => 'Unique ID already exist.',
            // 'unique_key.unique' => 'Unique Key already exist.',
            'phone_num.unique' => 'Phone Number already exist.'
        ]);

        // Check if the auto generated unique id is already in the database
        $this->unique_id_check($req->voter_nm);

        DB::beginTransaction(function () use ($req) {

            // voter::create([
            //     'voter_nm' => $req->voter_nm,
            //     'email' => $req->email,
            //     'valid_id' => $req->valid_id,
            //     'unique_id' => $this->unique_id,
            //     'unique_key' => $this->unique_key,
            //     'phone_num' => $req->phone_num
            // ]);

            // $message = "Click the link below and enter your credentials to begin voting \nUnique Id: $this->unique_id \nUnique Key: $this->unique_key \n";
            // $twilio = new TwilioController();
            // $twilio->sendSMS($req->phone_num, $message);

            try {
                voter::create([
                    'voter_nm' => $req->voter_nm,
                    'email' => $req->email,
                    'valid_id' => $req->valid_id,
                    // 'unique_id' => $req->unique_id,
                    // 'unique_key' => $req->unique_key,
                    'unique_id' => $this->unique_id,
                    'unique_key' => $this->unique_key,
                    'phone_num' => $req->phone_num
                ]);

                $message = "Click the link below and enter your credentials to begin voting \nUnique Id: $this->unique_id \nUnique Key: $this->unique_key \n";
                $twilio = new TwilioController();
                $twilio->sendSMS($req->phone_num, $message);


                voter::commit();
                // all good
            } catch (\Exception $e) {
                voter::rollback();
                return redirect()->back()->with('error', 'Failed to add voter: ' . $e);
            }
        });


        return redirect()->back()->with('Success', 'Voter Added');
    }

    private function unique_id_check($voter_nm)
    {
        $name_array = explode(' ', $voter_nm);
        $prefix = $name_array[1][0] . $name_array[0][0];

        $this->unique_id = $prefix .
            substr(md5(microtime()), rand(0, 26), 6);
        $this->unique_key = uniqid();

        if (voter::where('unique_id', $this->unique_id)->count() > 0) {
            $this->unique_id_check($voter_nm);
        }
    }

    function view()
    {
        $voters = voter::all();
        return view('voter/view', compact('voters'));
    }

    function edit($id)
    {
        $voter = voter::find($id);

        return view('voter/edit', compact('voter'));
    }

    function update(Request $req)
    {

        voter::find($req->id)->update([
            'voter_nm' => $req->voter_nm,
            'email' => $req->email,
            'valid_id' => $req->valid_id,
            'unique_id' => $req->unique_id,
            'unique_key' => $req->unique_key,
            'phone_num' => $req->phone_num
        ]);

        return redirect()->back()->with('Success', 'Voter Updated');
    }

    function delete($id)
    {
        voter::destroy($id);
        return redirect()->back()->with('Success', 'Voter Deleted');
    }
}
