<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return \view('library.layouts.home');
    }

    public function detail(){
        return \view('library.layouts.details');
    }

    public function borrow(){
        return \view('library.layouts.borrows');
    }

    public function return(){
        return \view('library.layouts.returns');
    }
}