<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        return "Bu userlarni royxati";
    }

    public function show($user)
    {
//        return "tanlangan user: " . $user;

        /*return view('users.show', [
            'name' => 'Samandar',
            'id' => $user
        ]);*/

        return view('users.show')->with(['name' => 'Samandar', 'id' => $user]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function edit($user_id)
    {
        return $user_id . ' ni o\'uzgartirish';
    }
}
