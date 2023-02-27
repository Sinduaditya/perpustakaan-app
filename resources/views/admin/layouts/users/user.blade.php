@extends('admin.app')
@section('title', 'Users Data | E-Perpustakaan ')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Users Data</h1>

        </div>
        <div class="container-fluid">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('users.create') }}" class="btn btn-primary">
                            <i class="fas fa-fw fa-plus"></i>
                            Tambah
                        </a>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-2">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    {{-- <th>Password</th> --}}
                                    <th>Alamat</th>
                                    <th>No User</th>
                                    <th>Telepon</th>
                                    <th>Roles</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->username }}</td>
                                        {{-- <td>{{ $user->password }}</td> --}}
                                        <td>{{ $user->alamat }}</td>
                                        <td>{{ $user->no_user }}</td>
                                        <td>{{ $user->no_telepon }}</td>
                                        <td>{{ $user->roles }}</td>
                                        <td>
                                            <form action="{{ route('users.destroy', $user->id_user) }}" method="POST">
                                                <a href="{{ route('users.edit', $user->id_user) }}" class="btn btn-primary">
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
