<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\TamuControllers;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('users.login');
// });


// Route::get('register', function () {
//     return view('users.register');
// });

Route::get('forgot', function () {
    return view('users.forgot');
});

Route::get('sidebar', function () {
    return view('layouts.sidebar');
});

Route::get('/users/list', [TamuControllers::class, 'index']);

Route::get('/', [UserController::class, 'index'])->middleware('guest');
Route::post('/', [UserController::class, 'login']);

Route::get('/logout', [UserController::class, 'logout']);

Route::get('/register', [UserController::class, 'register']);
Route::post('/register', [UserController::class, 'create']);

Route::delete('/delete/{id}', [UserController::class, 'delete'])->name('delete');

Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('edit');

Route::put('/user/{id}/update', [UserController::class, 'update']);

Route::get('/layouts/main', [UserController::class, 'list']);

Route::get('/articles', [PostController::class, 'show']);

Route::get('/post/{$id}',[PostController::class, 'showpost']);

