<?php

namespace Database\Seeders;

use App\Models\BallotQuestion;
use Illuminate\Database\Seeder;

class BallotQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $BallotQuestion = [
            [
                'question'=> 'Who for President?',
            ]
        ];

        foreach($BallotQuestion as $key => $value){
            BallotQuestion::create($value);
        }
    }
}
