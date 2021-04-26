<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            [
                'location'=>"A108 Adam Street, New York, NY 535022",
                'email'=>"infoo@example.com",
                'phone'=>'1 5589 55488 55',
                'map'=>'https://www.google.com/maps?ll=40.710128,-74.006227&z=14&t=m&hl=en-US&gl=BG&mapclient=embed&cid=13302823950184191043',
            ]
        ]);
    }
}
