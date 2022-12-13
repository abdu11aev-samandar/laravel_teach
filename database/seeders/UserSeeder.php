<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'John',
            'email' => 'John@example.com',
            'password' => Hash::make('secret')
        ]);
        $user->roles()->attach([1, 3]);

        $user2 = User::create([
            'name' => 'Ali',
            'email' => 'Ali@example.com',
            'password' => Hash::make('secret')
        ]);
        $user2->roles()->attach([2]);
    }
}
