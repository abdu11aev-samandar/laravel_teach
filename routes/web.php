<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

Route::get('/', [PageController::class, 'main']);
Route::get('about', [PageController::class, 'about'])->name('about');
Route::get('services', [PageController::class, 'services'])->name('services');
Route::get('projects', [PageController::class, 'projects'])->name('projects');
Route::get('contact', [PageController::class, 'contact'])->name('contact');

Route::resource('posts', PostController::class);

/*Route::get('posts', [PostController::class, 'index'])->name('post.index');
Route::get('posts/{post}', [PostController::class, 'show'])->name('post.show');
Route::get('posts/create', [PostController::class, 'create'])->name('post.create');
Route::post('posts/create', [PostController::class, 'store'])->name('post.store');
Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::put('posts/{post}/edit', [PostController::class, 'update'])->name('post.update');
Route::delete('posts/{post}/delete', [PostController::class, 'destroy'])->name('post.delete');*/

/*Route::get('/users', [UserController::class, 'index']);
Route::get('/users/create', [UserController::class, 'create']);
Route::get('/users/{user}', [UserController::class, 'show']);
Route::get('/users/{user}/edit', [UserController::class, 'edit']);
Route::post('/user-create', [UserController::class, 'store']);*/
