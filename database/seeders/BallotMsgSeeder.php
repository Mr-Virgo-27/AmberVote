<?php

namespace Database\Seeders;

use App\Models\BallotMsg;
use Illuminate\Database\Seeder;

class BallotMsgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        BallotMsg::create([
            'ballot_id'=>1,
            'msg_type'=>'Thank you',
            'msg_desc'=>'Thank you for voting in this election'
        ]);

         BallotMsg::create([
            'ballot_id'=>2,
            'msg_type'=>'Confirmation',
            'msg_desc'=>'You have submitted your vote'
         ]);

        BallotMsg::create([
            'ballot_id' => 3,
            'msg_type' => 'Confirmation',
            'msg_desc' => 'You have submitted your vote'
        ]);
    }
}
