<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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


Route::controller(HomeController::class)->group(function(){
    Route::get('/','home')->name('home');
    Route::get('/book/detail/{id_buku}','show')->name('book.detail');
    Route::get('/borrows','borrow')->name('borrows');
    Route::get('/returns','return')->name('returns');
    Route::get('/Book/search','search')->name('search');
});


Route::group(['middleware' => ['auth', 'isAdmin']], function(){
    Route::get('/dashboard',[DashboardController::class,'dashBoard'])->name('dashboard');
    Route::resource('/dashboard/borrows', BorrowController::class);
    Route::resource('/dashboard/books', BookController::class);
    Route::resource('/dashboard/users', UserController::class);
});

Route::controller(AuthController::class)->group(function(){
    Route::middleware('guest')->group(function () {
        Route::get('login','index')->name('login');
        Route::post('custom-login','customLogin')->name('login.custom');
        Route::get('register','registration')->name('register');
        Route::post('custom-registrations','customRegistration')->name('register.custom');
    });
    Route::get('signout','signOut')->middleware('auth')->name('signout');
});