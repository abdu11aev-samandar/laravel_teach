<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/test-route', [Controller::class, 'action']);

/*Route::get('/test-route', function () {
    return ['success' => 'Muvaffaqqiyatli'];
});*/

/*Route::get('/test-route', function () {
    return 'Muvaffaqqiyatli';
});*/

///////////////////////////////////////////////////////////

/*Route::get('/test-route', function () {
    return view('test');
});*/

Route::view('/test-route', 'test');

///////////////////////////////////////////////////////////

Route::get('users', function () {
    return 'Users';
});

Route::get('/users/{id}', function ($id) {
    return 'Users';
});

Route::get('/users/{id?}', function ($id = null) {
    return 'Users';
});

Route::get('/users/{id?}', function ($id = null) {
    return 'Users';
})->name('userlar');

/////////////////////////////////////////////////////////////

Route::post('contact', function () {
    return 'post route';
});

Route::redirect('/first', 'second');

Route::get('second', function () {
    return 'second route';
});

Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        // Matches The "/admin/usres" URL
        return 'admin users';
    });
});
