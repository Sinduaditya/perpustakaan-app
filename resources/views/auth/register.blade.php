@extends('auth.base')
@section('title', 'Register | E-perpustakaan')
@section('content')

    <body class="home">
        <div class="container">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-block">
                            <img src="{{ asset('images/pangeran diponegoro.jpg') }}" alt="buku" srcset="">
                        </div>
                        <div class="col-lg-7">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="mb-4">Buat akun E-Perpustakaan !</h1>
                                </div>
                                <form class="user" action="{{ route('register.custom') }}" method="POST">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user"
                                                placeholder="Masukkan username" name="username" required autofocus>
                                            @if ($errors->has('username'))
                                                <span class="text-danger">{{ $errors->first('username   ') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="number" class="form-control form-control-user"
                                                placeholder="Masukkan nomer user" name="no_user" required autofocus>
                                            @if ($errors->has('no_user'))
                                                <span class="text-danger">{{ $errors->first('no_user') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                            placeholder="Masukkan Alamat" name="alamat" required autofocus>
                                        @if ($errors->has('alamat'))
                                            <span class="text-danger">{{ $errors->first('alamat') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" class="form-control form-control-user"
                                                placeholder="Masukkan password" name="password" required autofocus>
                                            @if ($errors->has('password'))
                                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="number" class="form-control form-control-user"
                                                placeholder="Masukkan No Telepon" name="no_telepon" required autofocus>
                                            @if ($errors->has('no_telepon'))
                                                <span class="text-danger">{{ $errors->first('no_telepon') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Daftar
                                    </button>
                                </form>
                                <br><br>
                                <div class="text-center">
                                    <a class="small" href="{{ route('login') }}">Sudah punya akun? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

@endsection
