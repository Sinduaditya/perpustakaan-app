<?php

namespace App\Http\Controllers;

use App\Models\Borrow;
use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $books = Book::latest('id_buku')->paginate(8);
        return \view('library.layouts.home', compact('books'));
    }

    public function show($id){

        $book = Book::where('id_buku', $id)->first();
        return \view('library.layouts.details', compact('book'));
    }

    public function borrow(Book $book){
        $borrows = Borrow::where('id_user', auth()->id())->latest('id_pinjam')->paginate(3);
        return \view('library.layouts.borrows', compact('borrows'));
    }

    public function return(){
        return \view('library.layouts.returns');
    }

    public function search(Request $request){
        if($request->has('search')){
            $books = Book::where('judul_buku','LIKE','%'.$request->search.'%')->get();
        } else{
            $books = Book::all();
        }
            return view('library.layouts.home',['books'=> $books]);
    }
}
