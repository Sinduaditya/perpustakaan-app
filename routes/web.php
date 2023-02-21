<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BorrowController;
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


Route::get('/',HomeController::class);
Route::resource('/dashboard/borrows', BorrowController::class);
Route::resource('/dashboard/books', BookController::class);
Route::resource('/dashboard/users', UserController::class);
Route::get('/dashboard',[DashboardController::class,'dashBoard'])->name('home');
