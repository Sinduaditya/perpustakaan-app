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
                @if ($message = session()->get('success'))
                    <div class="alert alert-success m-2">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Buku</th>
                                    <th>Peminjam</th>
                                    <th>Tanggal Pinjam</th>
                                    <th>Durasi</th>
                                    <th>Jumlah</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($borrows as $borrow)
                                    <tr>
                                        <td>{{ $borrow->book->judul_buku }}</td>
                                        <td>{{ $borrow->user->username }}</td>
                                        <td>{{ $borrow->tgl_pinjam->locale('id_ID')->isoFormat('LL') }}</td>
                                        <td>{{ $borrow->duration }}</td>
                                        <td>{{ $borrow->jumlah }}</td>
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
