<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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
        // \App\Models\User::factory(10)->create();

        $this->call(EducationSeeder::class);

        $this->call(PostSeeder::class);

        $this->call(CategorySeeder::class);

        $this->call(UserSeeder::class);

        $this->call(ProjectSeeder::class);

    }
}
