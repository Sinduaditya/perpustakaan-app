@extends('library.app')
@section('title', 'Book | Detail')
@section('content')
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-10 col-lg-8 mt-5">
                <div class="shadow rounded-22 ">
                    <div class="d-flex gap-5">
                        <img src="{{ asset('storage/' . $book->cover_buku) }}" class="img-detail p-3 rounded-22" width="100"
                            alt="" srcset="">
                        <div class="mt-5 ">
                            <h2>{{ $book->judul_buku }}</h2>
                            <div class="d-flex justify-content-between">
                                <ul>
                                    <li>Kode Buku: {{ $book->kode_buku }}</li>
                                    <li>Jumlah: {{ $book->jumlah }}</li>
                                    <li>Pengarang: {{ $book->penggarang }}</li>
                                    <li>Kategori: {{ $book->kategori }}</li>
                                </ul>
                                <ul>
                                    <li>Penerbit: {{ $book->penerbit }}</li>
                                    <li>Staus Buku: {{ $book->status_buku }}</li>
                                    <li>Tahun Terbit: {{ $book->tahun_terbit }}</li>
                                </ul>
                            </div>
                            {!! $book->sinopsis_buku !!}
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3 justify-content-end  px-4 py-3">
                        <div class="btncol  px-3 p-1 p-auto rounded-pill">
                            <a href="{{ route('home') }}" class="text-white fw-thin" style="text-decoration: none;">
                                Kembali
                            </a>
                        </div>
                        <div class="btncol  px-3 p-1 p-auto rounded-pill">
                            <a href="#" class="text-white fw-thin" style="text-decoration: none;">
                                Pinjam
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
