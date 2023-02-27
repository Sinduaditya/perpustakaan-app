@extends('auth.base')
@section('title', 'Login | E-perpustakaan')
@section('content')


@endsection

<body class="home">
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block">
                                <img src="{{ asset('images/pangeran diponegoro.jpg') }}" alt="" srcset="">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-left">
                                        <h1 class="text-dark mb-4">Login
                                            <br>E-Perpustakaan
                                        </h1>
                                    </div>
                                    <form class="user" method="POST" action="{{ route('login.custom') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" name="no_user" class="form-control form-control-user"
                                                placeholder="Masukkan no user anda" required>
                                            @if ($errors->has('no_user'))
                                                <span class="text-danger">{{ $errors->first('no_user') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password"
                                                class="form-control form-control-user"
                                                placeholder="Masukkan password anda" required>
                                            @if ($errors->has('password'))
                                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('register') }}">Daftar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</body>
