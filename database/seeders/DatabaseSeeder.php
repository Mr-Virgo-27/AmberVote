<?php

namespace Database\Seeders;

use App\Models\BallotOption;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            Voters::class,
            BallotSeeder::class,
            ElectionSeeder::class,
            BallotQuestionSeeder::class,
            BallotOptionSeeder::class,
        ]);

    }
}
