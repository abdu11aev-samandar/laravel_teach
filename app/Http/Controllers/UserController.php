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
        return "tanlangan user: " . $user;
    }

    public function create()
    {
        return view('users.create');
    }

    public function edit($user_id)
    {
        return $user_id.' ni o\'uzgartirish';
    }
}
