<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Video;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $videos = [
            [
                'name' => 'deadpool trailer'
            ],
            [
                'name' => 'infinitywar trailer'
            ],
            [
                'name' => 'jurassic world trailer'
            ],
            [
                'name' => 'it trailer'
            ]
        ];

        foreach($videos as $video) {
            Video::create($video);
        }
    }
}
