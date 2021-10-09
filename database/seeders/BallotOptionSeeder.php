<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BallotOption;

class BallotOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $BallotOption = [
            [
                'question_id' => '1',
                'option' => 'Donald Trump',
                'max_res' => '1',
                'min_res' => '1',
                'photo'=> 'trump.jpg',
                'desc' => 'Vote for him'
            ]
        ];

        $BallotOption2 = [
            [
                'question_id'=> '1',
                'option' => 'Barrack Obama',
                'max_res' => '1',
                'min_res' => '1',
                'photo'=> 'barrack.jpg',
                'desc' => 'Vote for him'
            ]
        ];

        foreach($BallotOption as $key => $value){
            BallotOption::create($value);
        }
        foreach($BallotOption2 as $key => $value){
            BallotOption::create($value);
        }
    }
}
