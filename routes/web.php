<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PaginationController;
use App\Http\Controllers\UploadFileController;

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

Route::get('/add_post',[PostController::class,'addPost'])->name('post.add');

Route::post('/add_post',[PostController::class,'addPostSubmit'])->name('post.addsubmit');

Route::get('/show_student',[PostController::class,'getAllStudentList'])->name('post.showdata');


Route::get('/show_student/{id}',[PostController::class,'getStudentById'])->name('post.getbyid');

Route::get('/delet_student/{id}',[PostController::class,'deleteStudentById'])->name('post.getbyid');

Route::post('/update_student',[PostController::class,'updateStudentById'])->name('post.update');

Route::get('/1',[PostController::class,'innerJoinCaluse'])->name('post.innerjoin');

Route::get('/contact_us',[PostController::class,'contactUs']);
Route::get('/about_us',[PostController::class,'aboutUs']);
Route::get('/',[PostController::class,'home'])->name('post.home');

Route::post('/upload',[UploadFileController::class,'fileUplad'])->name('post.fileup');
