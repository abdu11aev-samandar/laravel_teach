<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function main()
    {
        return view('main');
    }

    public function welcome()
    {
        return view('welcome', [
            'name' => 'John',
            'records' => [1, 2, 3, 4, 5]
        ]);
    }


}
