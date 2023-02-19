<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;


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



// Route::get('/books',[BookController::class,'index'])->name('books.index');
// Route::get('/books/create',[BookController::class,'create'])->name('books.create');

Route::resource('/books', BookController::class);
Route::resource('/users', UserController::class);

Route::get('/',[DashboardController::class,'dashBoard'])->name('home');