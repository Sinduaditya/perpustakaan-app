@extends('library.app')
@section('title', 'Home | Perpustakaan')
@section('content')
    <div class="home">
        <div class="jumbotron">
            <h1 class="fw-bold ">Halo Sindu👋,
                <br>
                Selamat Datang Di Aplikasi E-Perpustakaan
            </h1>
        </div>
        <div class="container d-flex justify-content-center">
            <div class="cardsrc mt-5 p-4">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari Judul Buku">
                    <div class="input-group-append"><button class="btn btn-primary"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" id="library">
            <div class="px-lg-5 mt-4 ">
                <h3 class="mb-3">Daftar Buku</h3>
                <div class="container">
                    <div class="row">
                        @foreach ($books as $book)
                            <div class="col-lg-3">
                                <div class="card-buku mx-auto shadow-lg">
                                    <img src="{{ asset('storage/' . $book->cover_buku) }}" alt="buku">
                                    <div class="deskripsi-box p-2">
                                        <h3>{{ $book->judul_buku }}</h3>
                                        <p>Pengarang : {{ $book->penggarang }}</p>
                                        <p>Penerbit : {{ $book->penerbit }}</p>
                                        <div
                                            class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                            <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                                    class="font-weight-bold">Stok: {{ $book->jumlah }}</span>
                                            </p>
                                            <div class="btncol  px-3 p-1 p-auto rounded-pill">
                                                <a href="{{ route('book.detail', $book->id_buku) }}"" method="POST"
                                                    class="text-white fw-thin" style="text-decoration: none;">
                                                    Detail
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <br><br><br><br><br>
                </div>
            </div>
        </div>
    </div>

@endsection
