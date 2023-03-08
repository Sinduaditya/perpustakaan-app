@extends('admin.app')
@section('title', 'Return Edit | E-Perpustakaan')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Return Edit</h1>

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
                        <div class="alert alert-success mb-1 mt-1">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    <form action="{{ route('returns.update', $borrows->id_pinjam) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="status">Status</label>
                                <select class="form-control" value="{{ $borrows->id_pinjam }}" name="status"
                                    id="status">
                                    <option>{{ $borrows->status }}</option>
                                    <option>Sudah Kembali</option>
                                </select>
                                @error('status')
                                    <div class="alert alert-danger mt-1 mb-1">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="denda">Denda</label>
                                <input type="number" class="form-control" name="denda" value="{{ $borrows->denda }}"
                                    placeholder="Masukkan Jumlah Denda Keterlambatan">
                                @error('denda')
                                    <div class="alert alert-danger mt-1 mb-1">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
