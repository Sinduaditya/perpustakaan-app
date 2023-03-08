@extends('library.app')
@section('title', 'Book | Detail')
@section('content')
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-10 col-lg-8 mt-5">
                <div class="shadow rounded-22 ">
                    <div class="d-lg-flex gap-5 m-5 ">
                        <img src="{{ asset('storage/' . $book->cover_buku) }}" class="img-detail  mt-auto mb-auto rounded-22"
                            alt=".." srcset="">
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
                            <a href="{{ route('home') }}" class="btn btn-primary p-1 px-3" style="text-decoration: none;">
                                Kembali
                            </a>
                            @if (auth()->check())
                                <form action="{{ route('my-books.store', $book) }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <div class="d-flex  align-items-center gap-3 justify-content-end  px-4 py-3">
                                        @switch($book->status_buku == 'Tidak Tersedia')
                                            @case('kosong')
                                                <button type="button"
                                                    class="btn btn-outline-secondary btn-lg d-block mx-auto px-5 my-5" disabled>Buku
                                                    Tidak Tersedia</button>
                                            @break

                                            @case($book->jumlah > 0)
                                                <button type="button"
                                                    class="btn btn-outline-secondary btn-lg d-block mx-auto px-5 my-5" disabled>Stok
                                                    Habis</button>
                                            @break

                                            @default
                                                <button type="submit" class="btn btn-primary  px-3 p-1 p-auto">
                                                    Pinjam
                                                </button>
                                            </div>
                                            <div class="mb-4">
                                                <input type="number" id="pinjam" name="duration" class="jumlah rounded"
                                                    placeholder="Lama Pinjam" required>
                                                <label for="pinjam">Hari</label>
                                                @error('duration')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                    @endswitch
                                </form>
                            @endif
                            @guest
                                <button type="button" class="btn btn-primary btn-lg d -block mx-auto px-5 my-5" disabled>Anda
                                    harus login untuk bisa meminjam</button>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br>
        </div>
    @endsection
