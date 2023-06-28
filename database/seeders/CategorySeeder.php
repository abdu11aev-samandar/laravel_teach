<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Category::create(['name' => 'Web Design']);
        Category::create(['name' => 'Web Development']);
        Category::create(['name' => 'Online Marketing']);
        Category::create(['name' => 'Keyword Research']);
        Category::create(['name' => 'Email Marketing']);
    }
}
