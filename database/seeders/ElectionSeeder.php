<?php

namespace Database\Seeders;

use App\Models\Election;
use Illuminate\Database\Seeder;

class ElectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $election= [
           [
               'election_nm' => 'President',
               'start_date' => '2021-05-05',
               'end_date' => '2021-08-05',
               'desc' => 'Vote for a new President',
               'status' => 'Active',
           ]
       ];

       foreach($election as $key => $value){
           Election::create($value);
       }
    }
}
