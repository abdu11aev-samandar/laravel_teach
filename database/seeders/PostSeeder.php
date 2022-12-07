<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run()
    {
        Post::create([
            'user_id' => 1,
            'title' => 'sarlavha',
            'short_content' => 'qisqa mazmuni',
            'content' => 'misol kontent',
            'photo' => null
        ]);
    }
}
