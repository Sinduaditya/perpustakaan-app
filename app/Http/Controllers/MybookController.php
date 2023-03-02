<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Book;
use App\Models\Borrow;


;

class MybookController extends Controller
{
    public function index(){
        $currentBorrows = Borrow::query()
        ->with('book')
        ->whereBelongsTo(auth()->user())->latest('id_pinjam')
        ->paginate(6);

        return view()->with([
            'currentBorrows' => $currentBorrows,
        ]);
    }


    public function store(Request $request, Book $book) {
         $request->validate([
            'duration' => ['required', 'numeric'],
        ]);

        
        Borrow::create([
            'tgl_pinjam' => now(),
            'duration' => $request->duration,
            'jumlah' => '1',
            'status' => 'Menunggu' ,
            'id_buku' => $book->id_buku,
            'id_user' =>  auth()->id(),
        ]);


        return redirect()->route('borrows')->with('success', 'Berhasil Mengajukan Peminjaman!');
    }

    public function update(Request $request){

    }
}
