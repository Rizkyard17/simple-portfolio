<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Education::Create([
            "name" => "SMAN 8 Kota Jambi",
            "address" => "Jambi City, Jambi",
            "role" => "Graduate",
            "path" => "Naturan Science Major",
            "body" => "While studying at SMA Negeri 8 Kota Jambi, I studied the basics of science and mathematics which became the foundation for studying technology and programming."
        ]);

        Education::Create([
            "name" => "Universitas Jambi",
            "address" => "Muaro Jambi, Jambi",
            "role" => "College",
            "path" => "Information System",
            "body" => "As an Information Systems student at Jambi University, I study various aspects of information technology, including software development, data management, and system analysis. I am active in various academic projects and organizational activities that support the development of my skills in technology."
        ]);

        Education::Create([
            "name" => "Bangkit Academy",
            "address" => "Indonesia",
            "role" => "Cohort",
            "path" => "Machine Learning",
            "body" => "Through the Bangkit Academy program supported by Google, Gojek, and Traveloka, I deepened my understanding of machine learning, including the application of machine learning techniques in solving real problems. This program also provides experience in cross-disciplinary teamwork and developing data-driven technology solutions."
        ]);
    }
}
