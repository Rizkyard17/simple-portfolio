<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::Create([
            "name" => "Fruitastic",
            "body" => "Fruitastic is an Android-based scanning application designed to help users quickly and accurately assess fruit freshness. Utilizing image processing technology and machine learning algorithms, this application allows users to scan their desired fruits, detecting visual indicators of freshness, such as color, texture, and blemishes",
            "image" => "images/logo_fruitastic.png",
        ]);

        Project::Create([
            "name" => "Ruang Rame",
            "body" => "Ruang Rame is a Flutter-based mobile application designed to facilitate users in finding and participating in various local events around them. The project aims to create a platform that supports community interaction, increases participation in local events, and helps event organizers promote their activities more effectively.",
            "image" => "images/logo_ruangrame.png",
        ]);
    }
}
