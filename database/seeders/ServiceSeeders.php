<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                "icon"=>"icofont-computer",
                'titre'=>'Lorem Ipsum',
                'description'=>'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident',
            ],
            [
                "icon"=>"icofont-chart-bar-graph",
                'titre'=>'Dolor Sitema',
                'description'=>'Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata',
            ],
            [
                "icon"=>"icofont-earth",
                'titre'=>'Sed ut perspiciatiss',
                'description'=>'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur',
            ],
            [
                "icon"=>"icofont-image",
                'titre'=>'Magni Dolorees',
                'description'=>'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
            ],
            [
                "icon"=>"icofont-settings",
                'titre'=>'Nemoo Enim',
                'description'=>'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque',
            ],
            [
                "icon"=>"icofont-tasks-alt",
                'titre'=>'Eiusmod Tempur',
                'description'=>'Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi',
            ],

        ]);

    }
}
