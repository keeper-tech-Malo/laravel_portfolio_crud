<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facts')->insert([
            [
                "happy" => 232,
                "project" => 521,
                "support" => 1463,
                "work" => 15,
                "created_at" =>now(),
            ],
        ]);
    }
}
