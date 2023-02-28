@extends('admin.app')
@section('title', 'User Edit | E-Perpustakaan')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">User Edit</h1>

        </div>
        <div class="container-fluid">
            <div class="card shadow mb-4 ">
                <div class="card-header py-3">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('users.index') }}" class="btn btn-primary">
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
                    <form action="{{ route('users.update', $user->id_user) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="username">Username</label>
                                <input type="text" value="{{ $user->username }}" name="username" class="form-control"
                                    id="username" placeholder="Masukkan Username">
                                @error('username')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="password">Password</label>
                                <input type="password" value="{{ $user->password }}" name="password" class="form-control"
                                    id="password" placeholder="Masukkan Password">
                                @error('password')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="alamat">Alamat</label>
                                <input type="text" value="{{ $user->alamat }}" name="alamat" class="form-control"
                                    id="alamat" placeholder="Masukkan Alamat User">
                                @error('alamat')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="nouser">No user</label>
                                <input type="number" value="{{ $user->no_user }}" name="no_user" class="form-control"
                                    id="nouser" placeholder="Masukkan Nomer">
                                @error('no_user')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="telepon">No Telepon</label>
                                <input type="number" value="{{ $user->no_telepon }}" name="no_telepon"
                                    class="form-control" id="telepon" placeholder="Masukkan no telepon">
                                @error('no_telepon')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="roles">Roles</label>
                                <select class="form-control" value="{{ $user->id }}" name="roles" id="roles">
                                    <option>{{ $user->roles }}</option>
                                    <option>Admin</option>
                                    <option>Siswa</option>
                                    <option>Pustakawan</option>
                                </select>
                                @error('roles')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
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
