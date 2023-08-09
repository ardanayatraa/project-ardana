<?php

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

Route::get('/users/list', [TamuControllers::class, 'index']);


Route::get('/', [UserController::class, 'index'])->middleware('guest');
Route::post('/', [UserController::class, 'login']);

Route::get('/logout', [UserController::class, 'logout']);

Route::get('/register', [UserController::class, 'register']);
Route::post('/register', [UserController::class, 'create']);
