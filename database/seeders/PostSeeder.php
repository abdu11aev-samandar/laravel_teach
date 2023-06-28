<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Post::create([
            'user_id' => 1,
            'title' => 'Test title',
            'short_content' => 'qisqa mazmun',
            'content' => 'misol content',
            'photo' => null
        ]);

        Post::create([
            'user_id' => 2,
            'title' => 'Test title 2',
            'short_content' => 'qisqa mazmun 2',
            'content' => 'misol content 2',
            'photo' => null
        ]);
    }
}
