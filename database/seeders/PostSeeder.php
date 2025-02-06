<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::Create([
            'title' => 'Mathematic Mentor',
            'slug' => 'mathematic-mentor',
            'excerpt' => 'As a Mathematics Mentor, I was responsible for providing guidance and support to students in learning various mathematical topics....',
            'body'=> 'As a Mathematics Mentor, I was responsible for providing guidance and support to students in learning various mathematical topics. My duties included explaining complex concepts in an easy-to-understand manner, offering practice problems to enhance their skills, and giving constructive feedback to help students solve problems and prepare for exams. This experience sharpened my communication skills and deepened my understanding of different learning approaches.',
            'user_id' => 1,
            'category_id' => 3
        ]);

        Post::Create([
            'title' => 'Bangkit Academy Cohort',
            'slug' => 'bangkit-academy-cohort',
            'excerpt' => 'I was a participant in the Bangkit Academy Cohort 2024, a technology training program focused on developing skills in Data Science, Cloud Computing, and AI...',
            'body'=> 'I was a participant in the Bangkit Academy Cohort 2024, a technology training program focused on developing skills in Data Science, Cloud Computing, and AI. During this program, I learned fundamental concepts and technical skills highly relevant to current technological advancements, including programming, data analysis, and the application of AI across various industries. The program also involved collaborative projects that allowed me to work in teams and expand my professional network.',
            'user_id' => 1,
            'category_id' => 3
        ]);

        Post::Create([
            'title' => 'Secretary of Student Association',
            'slug' => 'secretaryof-student-association',
            'excerpt' => 'As the Secretary of the Student Association, I was responsible for managing documentation, taking meeting minutes, and supporting the organization of various activities and events held by the association...',
            'body'=> 'This role required strong organizational skills, attention to detail, and the ability to work with various parties. Additionally, I played a key role in internal and external communication to ensure smooth operations and support the development of initiatives that benefited the student body.',
            'user_id' => 1,
            'category_id' => 3
        ]);
    }
}
