<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
//        return response("Bu userlarni royxati", 201, ['X-Header-One' => 'Header Value Testing']);

        return response("Bu userlarni royxati", 201)
            ->header('X-Header-One', 'Header Value Testing');
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

    public function store(Request $request)
    {
//        dd($request->input('email'));
//        dd($request->all());

        /* if ($request->has('name')) {
             echo 'yes';
         }*/

        dd($request->name);
    }

    public function edit($user_id)
    {
        return $user_id . ' ni o\'uzgartirish';
    }
}
