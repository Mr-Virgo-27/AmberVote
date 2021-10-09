<?php

namespace Database\Seeders;

use App\Models\Ballot;
use Illuminate\Database\Seeder;

class BallotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 
        Ballot::create([
            'election_id'=> 1,
            'ballot_type'=>"multiple choice",
            'desc'=>"This is a Presidential election"

        ]);

        Ballot::create([
            'election_id' => 2,
            'ballot_type' => "Ranked Choice",
            'desc' => "This is to select the best meal options for the party"

        ]);

        Ballot::create([
            'election_id' => 3,
            'ballot_type' => "Multiple Choice",
            'desc' => "This is a Secretarial Election"

        ]);

        Ballot::create([
            'election_id' => 4,
            'ballot_type' => "Multiple Choice",
            'desc' => "This is to choose class President"

        ]);

        Ballot::create([
            'election_id' => 5,
            'ballot_type' => "Ranked Choice",
            'desc' => "This is to best dressed"

        ]);
    }
}
