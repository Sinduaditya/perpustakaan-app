@extends('admin.app')
@section('title', 'Books Data | E-Perpustakaan ')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Books Data</h1>

        </div>
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('books.create') }}" class="btn btn-primary">
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
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Kode Buku</th>
                                    <th>Judul Buku</th>
                                    <th>Jumlah</th>
                                    <th>Pengarang</th>
                                    <th>Penerbit</th>
                                    <th>Status Buku</th>
                                    <th>Kategori</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($books as $book)
                                    <tr>
                                        <td>{{ $book->kode_buku }}</td>
                                        <td>{{ $book->judul_buku }}</td>
                                        <td>{{ $book->jumlah }}</td>
                                        <td>{{ $book->penggarang }}</td>
                                        <td>{{ $book->penerbit }}</td>
                                        <td>{{ $book->status_buku }}</td>
                                        <td>{{ $book->kategori }}</td>
                                        <td>
                                            <form action="{{ route('books.destroy', $book->id_buku) }}" method="POST">
                                                <a href="{{ route('books.edit', $book->id_buku) }}"
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
                        <div>
                            {{ $books->links() }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
