<?php

use App\Http\Controllers\AdminController;
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

Route::get('/admin/userlist', [TamuControllers::class, 'index'])->name('userlist');

Route::get('/', [PostController::class, 'halamanawal']);

Route::get('/login', [UserController::class, 'index'])->middleware('guest');
Route::post('/login', [UserController::class, 'login'])->middleware('guest');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/register', [UserController::class, 'register'])->name('registeruser');
Route::post('/register', [UserController::class, 'create']);

Route::delete('/delete/{id}', [UserController::class, 'delete'])->name('delete');

Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('edit');
Route::put('/user/{id}/update', [UserController::class, 'update']);

Route::get('/layouts/main', [UserController::class, 'list']);

Route::get('/articles', [PostController::class, 'show']);

Route::get('/article/{slug}', [PostController::class, 'showpost'])->name('showpost');


Route::get('/tamu/articles/list', [PostController::class, 'postlist'])->name('postlist')->middleware('auth');

Route::get('/tamu/articles/create', [PostController::class, 'newpost'])->name('newpost');

Route::get('/create/post/checkSlug', [PostController::class, 'checkSlug']);



Route::post('/create/newpost', [PostController::class, 'createpost'])->name('createpost');






Route::get('/admin/edit/{slug}', [PostController::class, 'editpost'])->name('editpost');
Route::put('/admin/update/{slug}', [PostController::class, 'updatepost'])->name('updatepost');
Route::delete('admin/delete/{slug}', [PostController::class, 'deletepost'])->name('deletepost');




Route::get('/admin/allpost', [AdminController::class, 'allpost'])->name('allpost');
