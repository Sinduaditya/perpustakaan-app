<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Borrow;

class BorrowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['borrows'] = Borrow::orderBy('id_pinjam','desc')->paginate(5);
        return \view('admin.layouts.borrows.borrow', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \view('admin.layouts.borrows.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $pinjam = $request->validate([
            'no_user' => 'required',
            'username' => 'required',
            'kode_buku' => 'required',
            'judul_buku' => 'required',
            'jumlah' => 'required',
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required',
            'status' => 'required',
        ]);

        Borrow::create($pinjam);
        return \redirect()->route('borrows.index')->with('success','Borrow has been created successfully');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return \view('admin.layouts.borrows.edit');
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
            'no_user' => 'required',
            'username' => 'required',
            'kode_buku' => 'required',
            'judul_buku' => 'required',
            'jumlah' => 'required',
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required',
            'status' => 'required',
        ]);

        Borrow::where('id_pinjam', $id)->update($data);
        return \redirect()->route('borrows.index')->with('success','User has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $borrow = Borrow::where('id_pinjam', $id)->delete();
        return \redirect()->route('borrows.index')->with('success','Borrow has been deleted successfully');
    }
}