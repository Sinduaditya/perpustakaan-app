<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\User;
use App\Models\Borrow;


class DashboardController extends Controller
{


    public function dashBoard(){

        $totalsBook = Book::count();
        $totalsUser = User::count();
        $totalsBorrow = Borrow::count();
        return \view('admin.layouts.dashboard',compact('totalsBook','totalsUser','totalsBorrow'));
    }

}