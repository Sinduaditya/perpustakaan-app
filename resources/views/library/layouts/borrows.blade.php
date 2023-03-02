@extends('library.app')
@section('title', 'Peminjaman Buku | Perpustakaan')
@section('content')
    <div class="container-fluid">
        <div class="px-lg-5 mt-4 ">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible" id="box1">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" id="close"> </button>
                    {{ $message }}
                </div>
            @endif
            <h3 class="mb-3">Peminjaman Anda</h3>
            <div class="container">
                <div class="row">
                    @guest
                        <div class="alert alert-danger">
                            <Span>Anda Belum Login</Span>
                        </div>
                    @else
                        @forelse ($borrows as $item)
                            <div class="col-lg-3">
                                <div class="card-buku mx-auto shadow-lg">
                                    <div class="deskripsi-box p-2">
                                        <h3>{{ $item->book->judul_buku }}</h3>
                                        <p>Kode Buku : {{ $item->book->kode_buku }}</p>
                                        <p>Tgl Pinjam : {{ $item->tgl_pinjam->locale('id_ID')->isoFormat('LL') }}</p>
                                        <p>Durasi : {{ $item->duration }} &nbsp; Hari</p>
                                        <div
                                            class="d-flex align-items-center justify-content-between rounded-pill bg-light px-2 py-2 mt-4">
                                            <p class="small mb-0"><span class="font-weight-bold">Jumlah:
                                                    &nbsp;{{ $item->jumlah }}
                                                </span>
                                            </p>
                                            @if ($item->status == 'Terkonfirmasi')
                                                <div class=" bg-status px-3 p-1 p-auto rounded-pill">
                                                    <div class="text-white fw-thin">
                                                        {{ $item->status }}
                                                    </div>
                                                </div>
                                            @elseif ($item->status == 'Gagal')
                                                <div class="bg-danger px-3 p-1 p-auto rounded-pill">
                                                    <div class="text-white fw-thin">
                                                        {{ $item->status }}
                                                    </div>
                                                </div>
                                            @else
                                                <div class="btncol px-3 p-1 p-auto rounded-pill">
                                                    <div class="text-white fw-thin">
                                                        {{ $item->status }}
                                                    </div>
                                                </div>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="alert">
                                <Span>Belum Ada Yang Di Pinjam</Span>
                            </div>
                        @endforelse

                    @endguest
                </div>
                <br><br><br><br><br>
            </div>
        </div>
    </div>
@endsection
