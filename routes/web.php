<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PasswordResetController;
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



Route::get('sidebar', function () {
    return view('layouts.sidebar');
});

Route::get('/admin/userlist', [TamuControllers::class, 'index'])->name('userlist');

Route::get('/', [PostController::class, 'halamanawal']);

Route::get('/login', [UserController::class, 'index'])->name('login');
Route::post('/login', [UserController::class, 'login']);

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



// aproval
Route::get('tamu/articles/approve-list', [PostController::class, 'listApprovePending'])->name('pendingTamu');
Route::get('tamu/articles/rejected-list', [PostController::class, 'listApproveRejected'])->name('rejectedTamu');
Route::get('tamu/articles/approved-list', [PostController::class, 'listApproved'])->name('approvedTamu');




//admin
Route::get('admin/articles/approve-list', [AdminController::class, 'listApprovePending'])->name('approvalReq');
Route::get('admin/articles/approved/{slug}', [AdminController::class, 'approvedPost'])->name('approvalacc');
Route::get('admin/articles/reject/{slug}', [AdminController::class, 'rejectPost'])->name('approvalreject');



//forgot pass
Route::get('forgot-password', [PasswordResetController::class, 'showForgotPasswordForm'])->name('forgot.password');
Route::post('forgot-password', [PasswordResetController::class, 'sendResetLinkEmail'])->name('forgot.password.post');

Route::get('reset-password/{token}', [PasswordResetController::class, 'showResetPasswordForm'])->name('reset.password');
Route::post('reset-password', [PasswordResetController::class, 'resetPassword'])->name('reset.password.post');
