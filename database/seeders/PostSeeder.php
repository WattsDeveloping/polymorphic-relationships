<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'name' => 'the deadpool'
            ],
            [
                'name' => 'wade wilson'
            ],
            [
                'name' => 'juggernut'
            ],
            [
                'name' => 'cable'
            ]
        ];

        foreach($posts as $post) {
            Post::create($post);
        }
    }
}
