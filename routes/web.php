<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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
    return view('admin.app');
});

Route::get('/users',[HomeController::class,'addUser'])->name('users.index');
Route::get('/books',[HomeController::class,'addBook'])->name('books.index');
Route::get('/home',[HomeController::class,'dashBoard'])->name('home');