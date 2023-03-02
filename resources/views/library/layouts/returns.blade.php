@extends('library.app')
@section('title', 'Pengembalian Buku | Perpustakaan')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Returns Data</h1>

        </div>
        <div class="container-fluid">
            <div class="card shadow mb-4">

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

                                <tr>
                                    <td>test</td>
                                    <td>test</td>
                                    <td>test</td>
                                    <td>test</td>
                                    <td>test</td>
                                    <td>test</td>
                                    <td>test</td>
                                    <td>
                                        <form action="" method="POST">
                                            <a href="" class="btn btn-primary">
                                                <i class="fas fa-fw fa-home">
                                                    Beranda
                                                </i>
                                            </a>

                                        </form>
                                    </td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
