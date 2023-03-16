<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comments = [
            [
                'user_id' => 1,
                'body' => 'This is comment 1st body',
                'commentable_id' => 1,
                'commentable_type' => 'App\Models\Post',
            ],
            [
                'user_id' => 1,
                'body' => 'Comment 2 from video',
                'commentable_id' => 1,
                'commentable_type' => 'App\Models\Video',
            ],
            [
                'user_id' => 1,
                'body' => 'Expecto Petronum',
                'commentable_id' => 2,
                'commentable_type' => 'App\Models\Video',
            ],
            [
                'user_id' => 1,
                'body' => 'Aloh Mora',
                'commentable_id' => 2,
                'commentable_type' => 'App\Models\Post',
            ]
        ];

        foreach($comments as $comment) {
            Comment::create($comment);
        }
    }
}
