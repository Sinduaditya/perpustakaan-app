@extends('admin.app')
@section('title', 'Add Borrow | E-Perpustakaan ')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Borrow Data</h1>
        </div>
        <div class="container-fluid">
            <div class="card shadow mb-4 ">
                <div class="card-header py-3">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('borrows.index') }}" class="btn btn-primary">
                            <i class="fas fa-fw fa-arrow-alt-circle-right "></i>
                            Kambali
                        </a>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    <form action="{{ route('borrows.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nouser">No User</label>
                                <input type="number" name="no_user" class="form-control" id="nouser"
                                    placeholder="Masukkan No User yang akan pinjam">
                                @error('no_user')
                                    <div class="alert alert-danger mt-1 mb-1">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" id="username"
                                    placeholder="Masukkan username">
                                @error('username')
                                    <div class="alert alert-danger mt-1 mb-1">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="kodebuku">Kode Buku</label>
                                <input type="text" name="kode_buku" class="form-control" id="kodebuku"
                                    placeholder="Masukkan kode buku yang di pinjam">
                                @error('kode_buku')
                                    <div class="alert alert-danger mt-1 mb-1">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="judul_buku">Judul Buku</label>
                                <input type="text" name="judul_buku" class="form-control" id="judul_buku"
                                    placeholder="Masukkan judul buku yang di pinjam">
                                @error('judul_buku')
                                    <div class="alert alert-danger mt-1 mb-1">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="jumlah">Jumlah</label>
                                <input type="number" name="jumlah" class="form-control" id="jumlah"
                                    placeholder="Masukkan Jumlah pinjam">
                                @error('jumlah')
                                    <div class="alert alert-danger mt-1 mb-1">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-3">
                                <label for="tglpinjam">Tanggal Pinjam</label>
                                <input type="date" name="tgl_pinjam" class="form-control" id="tglpinjam"
                                    placeholder="Masukkan Tanggal Pinjam">
                                @error('tgl_pinjam')
                                    <div class="alert alert-danger mt-1 mb-1">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-3">
                                <label for="tglkembali">Tanggal Kembali</label>
                                <input type="date" name="tgl_kembali" class="form-control" id="tglkembali"
                                    placeholder="Masukkan Tanggal Kembali">
                                @error('tgl_kambali')
                                    <div class="alert alert-danger mt-1 mb-1">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <label for="status">Status</label>
                                <select class="form-control" name="status" id="status">
                                    <option>Menunggu</option>
                                    <option>Terkonfirmasi</option>
                                    <option>Gagal</option>
                                </select>
                                @error('status')
                                    <div class="alert alert-danger mt-1 mb-1">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
