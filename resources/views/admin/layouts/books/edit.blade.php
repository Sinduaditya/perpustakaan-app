@extends('admin.app')
@section('title', 'Books Edit | E-Perpustakaan')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Book Edit</h1>

        </div>
        <div class="container-fluid">
            <div class="card shadow mb-4 ">
                <div class="card-header py-3">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('books.index') }}" class="btn btn-primary">
                            <i class="fas fa-fw fa-arrow-alt-circle-right "></i>
                            Kambali
                        </a>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success mb-1 mt-1">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    <form action="{{ route('books.update', $book->id_buku) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="kodebuku">Kode Buku</label>
                                <input type="text" name="kode_buku" value="{{ $book->kode_buku }}" class="form-control"
                                    id="kodebuku" style="text-transform: uppercase;">
                                @error('kode_buku')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label for="judulbuku">Judul Buku</label>
                                <input type="text" name="judul_buku" value="{{ $book->judul_buku }}" class="form-control"
                                    id="judulbuku" placeholder="Masukkan Judul Buku">
                                @error('judul_buku')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="jumlahbuku">Jumlah Buku</label>
                                <input type="number" value="{{ $book->jumlah }}" name="jumlah" class="form-control"
                                    id="jumlahbuku" placeholder="Masukkan Jumlah Buku">
                                @error('jumlah')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="pengarang">Pengarang</label>
                                <input type="text" value="{{ $book->penggarang }}" name="penggarang" class="form-control"
                                    id="pengarang" placeholder="Masukkan Pengarang">
                                @error('penggarang')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="penerbit">Penerbit</label>
                                <input type="text" value="{{ $book->penerbit }}" name="penerbit" class="form-control"
                                    id="penerbit" placeholder="Masukkan Penerbit">
                                @error('penerbit')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="statusbuku">Status Buku</label>
                                <select class="form-control" value="{{ $book->id }}" name="status_buku"
                                    id="statusbuku">
                                    <option>{{ $book->status_buku }}</option>
                                    <option>Tidak Tersedia</option>
                                </select>
                                @error('status_buku')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="tahunterbit">Tahun Terbit</label>
                                <input type="number" value="{{ $book->tahun_terbit }}" name="tahun_terbit"
                                    class="form-control" id="tahunterbit" placeholder="Masukkan Tahun Terbit">
                                @error('tahun_terbit')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="coverbuku">Cover</label>
                                <input type="file" name="cover_buku" class="form-control" id="coverbuku">
                                <img src="/buku/{{ $book->cover_buku }}" alt="">
                                @error('cover_buku')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sinopsiseditor">Sinopsis</label>
                            <textarea id="sinopsiseditor" value="{{ $book->id }}" name="sinopsis_buku">
                                {{ $book->sinopsis_buku }}
                            </textarea>
                            @error('sinopsis_buku')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="kategoribuku">Kategori</label>
                            <select class="form-control" value="{{ $book->id }}" id="kategoribuku" name="kategori">
                                <option>{{ $book->kategori }}</option>
                                <option>Novel</option>
                                <option>Ensklopedia</option>
                                <option>Self Improvment</option>
                                <option>Komik</option>
                                <option>Pelajaran</option>
                            </select>
                            @error('kategori')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
