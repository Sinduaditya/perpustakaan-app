<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $books = Book::latest('id_buku')->paginate(8);
        return \view('library.layouts.home', compact('books'));
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