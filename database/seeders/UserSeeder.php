<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Samandar',
            'email'=>'email@ema.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name'=>'Samandar 2',
            'email'=>'email2@ema.com',
            'password' => Hash::make('password2'),
        ]);
    }
}
