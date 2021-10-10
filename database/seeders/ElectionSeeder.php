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
        $election = [
            [
                'user_id' => 1,
                'election_nm' => 'President',
                'start_date' => '2021-05-05',
                'end_date' => '2021-08-05',
                'desc' => 'Vote for a new President',
                'status' => 'Active',
            ],
            [
                'user_id' => 2,
                'election_nm' => 'Ceo',
                'start_date' => '2021-05-05',
                'end_date' => '2021-08-05',
                'desc' => 'Vote for a new Ceo',
                'status' => 'Active',
            ],
            [
                'user_id' => 2,
                'election_nm' => 'Governor',
                'start_date' => '2021-05-05',
                'end_date' => '2021-08-05',
                'desc' => 'Vote for a new Governor',
                'status' => 'Active',
            ],
            [
                'user_id' => 4,
                'election_nm' => 'Pastor',
                'start_date' => '2021-05-05',
                'end_date' => '2021-08-05',
                'desc' => 'Vote for a new Pastor',
                'status' => 'Inactive',
            ],
            [
                'user_id' => 5,
                'election_nm' => 'Principal',
                'start_date' => '2021-05-05',
                'end_date' => '2021-08-05',
                'desc' => 'Vote for a new Principal',
                'status' => 'Active',
            ],
            [
                'user_id' => 1,
                'election_nm' => 'Manager',
                'start_date' => '2021-05-05',
                'end_date' => '2021-08-05',
                'desc' => 'Vote for a new Manager',
                'status' => 'Active',
            ]
        ];

        foreach ($election as $key => $value) {
            Election::create($value);
        }
    }
}
