<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function addUser(){
        return \view('admin.layouts.user');
    }

    public function addBook(){
        return \view('admin.layouts.buku');
    }

    public function dashBoard(){
        return \view('admin.layouts.dashboard');
    }

}