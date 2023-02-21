@extends('admin.app')
@section('title', 'Borrows | E-Perpustakaan ')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Borrows Data</h1>

        </div>
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('borrows.create') }}" class="btn btn-primary">
                            <i class="fas fa-fw fa-plus"></i>
                            Tambah
                        </a>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success m-2">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No User</th>
                                    <th>Username</th>
                                    <th>Kode Buku</th>
                                    <th>Judul Buku</th>
                                    <th>Jumlah</th>
                                    {{-- <th>Tanggal Pinjam</th> --}}
                                    <th>Tanggal kembali</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($borrows as $borrow)
                                    <tr>
                                        <td>{{ $borrow->no_user }}</td>
                                        <td>{{ $borrow->username }}</td>
                                        <td>{{ $borrow->kode_buku }}</td>
                                        <td>{{ $borrow->judul_buku }}</td>
                                        <td>{{ $borrow->jumlah }}</td>
                                        {{-- <td>{{ $borrow->tgl_pinjam }}</td> --}}
                                        <td>{{ $borrow->tgl_kembali }}</td>
                                        <td>{{ $borrow->status }}</td>
                                        <td>
                                            <form action="{{ route('borrows.destroy', $borrow->id_pinjam) }}"
                                                method="POST">
                                                <a href="{{ route('borrows.edit', $borrow->id_pinjam) }}"
                                                    class="btn btn-primary">
                                                    <i class="fas fa-fw fa-edit"></i>
                                                </a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fas fa-fw fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
