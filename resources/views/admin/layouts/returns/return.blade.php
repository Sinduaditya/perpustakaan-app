@extends('admin.app')
@section('title', 'Returns | E-Perpustakaan ')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Returns Data</h1>

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
                                    <th>Judul Buku</th>
                                    <th>Peminjam</th>
                                    <th>Tanggal Pinjam</th>
                                    <th>Durasi</th>
                                    <th>Jumlah</th>
                                    <th>Denda</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($returns as $return)
                                    <tr>
                                        <td>{{ $return->book->judul_buku }}</td>
                                        <td>{{ $return->user->username }}</td>
                                        <td>{{ $return->tgl_pinjam->locale('id_ID')->isoFormat('LL') }}</td>
                                        <td>{{ $return->duration }} &nbsp;Hari</td>
                                        <td>{{ $return->jumlah }} &nbsp;Buku</td>
                                        <td>{{ $return->denda }}</td>
                                        <td>
                                            @if ($return->status == 'Terkonfirmasi')
                                                Belum Kembali
                                            @elseif ($return->status == 'Menunggu')
                                                Belum Konfirmasi
                                            @else
                                                {{ $return->status }}
                                            @endif
                                        </td>
                                        <td>
                                            <form action="" method="POST">
                                                <a href="" class="btn btn-primary">
                                                    <i class="fas fa-fw fa-edit"></i>
                                                </a>

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
