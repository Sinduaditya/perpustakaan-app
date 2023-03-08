@extends('library.app')
@section('title', 'Pengembalian Buku | Perpustakaan')
@section('content')
    <div class="container-fluid">
        <div class="px-lg-5 mt-4 ">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible" id="box1">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" id="close"> </button>
                    {{ $message }}
                </div>
            @endif
            <h3 class="mb-4">Pengembalian</h3>

            <div class="return mt-4">
                @guest
                    <div class="alert">
                        <Span>Login Dahulu</Span>
                    </div>
                @else
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
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
                                    @if ($return->status != 'Menunggu')
                                        <tr>
                                            <td>{{ $return->book->judul_buku }}</td>
                                            <td>{{ $return->user->username }}</td>
                                            <td>{{ $return->tgl_pinjam->locale('id_ID')->isoFormat('LL') }}</td>
                                            <td>{{ $return->duration }}&nbsp;Hari</td>
                                            <td>{{ $return->jumlah }}&nbsp;Buku</td>
                                            <td>Rp.&nbsp;{{ $return->denda }}
                                            </td>
                                            <td>
                                                @if ($return->status == 'Terkonfirmasi')
                                                    <div class="badge bg-warning px-2 py-1 rounded-pill">Belum Kembali</div>
                                                @elseif ($return->status == 'Menunggu')
                                                    <div class="badge bg-info px-2 py-1 rounded-pill"> Belum Terkonfirmasi
                                                    </div>
                                                @elseif ($return->status == 'Sudah Kembali')
                                                    <div class="badge bg-success px-2 py-1 rounded-pill">Sudah Di Kembalikan
                                                    </div>
                                                @else
                                                    {{ $return->status }}
                                                @endif
                                            </td>
                                            @if (Auth()->check())
                                                <form action="{{ route('my-books.update', $return) }}" method="POST">
                                                    @csrf
                                                    @method('POST')
                                                    @if ($return->status == 'Sudah Kembali')
                                                    @else
                                                        <td>
                                                            <button type="submit"
                                                                class="btn btn-primary px-1 py-1 ">Kembalikan</button>
                                                        </td>
                                                    @endif
                                                </form>
                                            @else
                                            @endif
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    @endguest
                </div>
            </div>
        </div>
    </div>
@endsection
