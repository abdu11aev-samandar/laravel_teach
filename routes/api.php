<?php

use App\Http\Controllers\Api\PostApiController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('posts', function () {
    return Cache::get('title');
});

//Route::get('posts/{post}', [PostApiController::class, 'show']);
//Route::get('posts', [PostApiController::class, 'index']);

Route::apiResource('posts', PostApiController::class);
