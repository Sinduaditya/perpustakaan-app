@extends('library.app')
@section('title', 'Book | Detail')
@section('content')
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-10 col-lg-8 mt-5">
                <div class="shadow rounded-22 ">
                    <div class="d-lg-flex gap-5 p-4">
                        <img src="{{ asset('storage/' . $book->cover_buku) }}" class="img-detail p-3 rounded-22" width="100"
                            alt="" srcset="">
                        <div class="mt-5 ">
                            <h2>{{ $book->judul_buku }}</h2>
                            <div class="d-flex justify-content-between p-4">
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

                            @if (auth()->check())
                                <form action="{{ route('my-books.store', $book) }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <div class="m-2">
                                        <input type="number" id="pinjam" name="duration" class="jumlah form-control"
                                            placeholder="Lama Pinjam" required>
                                        @error('duration')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="d-flex  align-items-center gap-3 justify-content-end  px-4 py-3">

                                        <a href="{{ route('home') }}" class="btn btn-primary"
                                            style="text-decoration: none;">
                                            Kembali
                                        </a>
                                        <button type="submit" class="btn btn-primary  px-3 p-1 p-auto">
                                            Pinjam
                                        </button>
                                    </div>
                                </form>
                            @elseif ($book->amount > 0)
                                <button type="button" class="btn btn-outline-secondary btn-lg d-block mx-auto px-5 my-5"
                                    disabled>Anda harus login untuk bisa meminjam</button>
                            @else
                                <button type="button" class="btn btn-outline-secondary btn-lg d-block mx-auto px-5 my-5"
                                    disabled>Buku tidak tersedia</button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    @endsection
