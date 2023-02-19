<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\User;


class DashboardController extends Controller
{


    public function dashBoard(){

        $totalsBook = Book::count();
        $totalsUser = User::count();
        return \view('admin.layouts.dashboard',compact('totalsBook','totalsUser'));
    }

}