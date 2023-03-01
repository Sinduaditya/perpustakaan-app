@extends('library.app')
@section('title', 'Peminjaman Buku | Perpustakaan')
@section('content')
    <div class="container-fluid">
        <div class="px-lg-5 mt-4 ">
            <h3 class="mb-3">Pinjam</h3>
            <div class="container">
                <div class="row">

                    <div class="col-lg-3">
                        <div class="card-buku mx-auto shadow-lg">
                            <div class="deskripsi-box p-2">
                                <h3>Judul</h3>
                                <p>Kode Buku :</p>
                                <p>Tgl Pinjam :</p>
                                <p>Durasi : </p>
                                <div
                                    class="d-flex align-items-center justify-content-between rounded-pill bg-light px-2 py-2 mt-4">
                                    <p class="small mb-0"><span class="font-weight-bold">Jumlah:
                                        </span>
                                    </p>
                                    <div class="btncol px-3 p-1 p-auto rounded-pill">
                                        <div class="text-white fw-thin" style="text-decoration: none;">
                                            Terkonfirmasi
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <br><br><br><br><br>
            </div>
        </div>
    </div>
@endsection
