<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::latest()->paginate(5);
        // $data['books'] = Book::orderBy('id_buku','desc')->paginate(5);
        return view('admin.layouts.books.buku', compact('books'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \view('admin.layouts.books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $buku = $request->validate([
            'kode_buku' => 'required',
            'judul_buku' => 'required',
            'jumlah' => 'required',
            'penggarang' => 'required',
            'penerbit' => 'required',
            'status_buku' => 'required',
            'tahun_terbit' => 'required',
            'sinopsis_buku' => 'required',
            'kategori' => 'required',
            'cover_buku' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('cover_buku')) {
            $path = $request->file('cover_buku')->store('buku');

            $buku['cover_buku'] = $path;
        }

        Book::create($buku);
        return \redirect()->route('books.index')->with('success','Book has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('books.show',compact('book'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::where('id_buku', $id)->first();
        return view('admin.layouts.books.edit',compact('book'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'kode_buku' => 'required',
            'kode_buku' => 'required',
            'judul_buku' => 'required',
            'jumlah' => 'required',
            'penggarang' => 'required',
            'penerbit' => 'required',
            'status_buku' => 'required',
            'tahun_terbit' => 'required',
            'sinopsis_buku' => 'required',
            'kategori' => 'required',
            'cover_buku' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('cover_buku')) {
            $path = $request->file('cover_buku')->store('buku');

            $data['cover_buku'] = $path     ;
        }

        Book::where('id_buku',$id)->update($data);
        return \redirect()->route('books.index')->with('success', 'Book has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::where('id_buku',$id)->delete();
        return \redirect()->route('books.index')->with('success','Book has been deleted successfully');
    }
}
