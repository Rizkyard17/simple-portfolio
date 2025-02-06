<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::Create([
            'id' => 1,
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::Create([
            'id' => 2,
            'name' => 'Data Analyst',
            'slug' => 'data-analyst'
        ]);

        Category::Create([
            'id' => 3,
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
    }
}
