<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use Session;

class LanguageController extends Controller
{
    public function change_locale($locale)
    {
        App::setLocale($locale);

        Session::put('locale', $locale);

        return redirect()->back();
    }
}
