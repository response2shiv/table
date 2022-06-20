<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RandomNumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('random_numbers')->truncate();
        DB::table('random_numbers')->insert([
            ['first_number' => rand(1, 50), 'second_number' => rand(1, 50)],
            ['first_number' => rand(1, 50), 'second_number' => rand(1, 50)],
            ['first_number' => rand(1, 50), 'second_number' => rand(1, 50)],
            ['first_number' => rand(1, 50), 'second_number' => rand(1, 50)],
            ['first_number' => rand(1, 50), 'second_number' => rand(1, 50)],
            ['first_number' => rand(1, 50), 'second_number' => rand(1, 50)],
            ['first_number' => rand(1, 50), 'second_number' => rand(1, 50)],
            ['first_number' => rand(1, 50), 'second_number' => rand(1, 50)],
            ['first_number' => rand(1, 50), 'second_number' => rand(1, 50)],
            ['first_number' => rand(1, 50), 'second_number' => rand(1, 50)],
        ]);
    }
}
