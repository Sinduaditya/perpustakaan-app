@extends('library.app')
@section('title', 'Home | Perpustakaan')
@section('content')

    <div class="jumbotron">
        <h1 class="fw-bold ">Selamat Datang Di Aplikasi E-perpustakaan</h1>
    </div>
    <div class="container d-flex justify-content-center">
        <div class="card mt-5 p-4">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari Judul Buku">
                <div class="input-group-append"><button class="btn btn-primary"><i class="fas fa-search"></i></button></div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="px-lg-5 mt-4">
            <h3 class="mb-3">Daftar Buku</h3>
            <div class="row">
                <!-- Book item -->
                <div class="col-xl-3 col-lg-4 col-md-6  mb-4">
                    <div class="bg-white rounded-lg shadow-lg"><img src="{{ asset('images/pangeran diponegoro.jpg') }}"
                            alt="bukuone" class="img-fluid card-img-top">
                        <div class="p-4">
                            <h5>Filosofi Teras</h5>
                            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                            <div
                                class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                        class="font-weight-bold">Stok</span>
                                </p>
                                <div class="btncol  px-3 p-1 p-auto rounded-pill">
                                    <a href="" class="text-white fw-thin" style="text-decoration: none;">
                                        Pinjam
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->

                <!-- Book item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="bg-white rounded-lg shadow-lg"><img src="{{ asset('images/pangeran diponegoro.jpg') }}"
                            alt="bukuone" class="img-fluid card-img-top">
                        <div class="p-4">
                            <h5>Filosofi Teras</h5>
                            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                            <div
                                class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                        class="font-weight-bold">Stok</span>
                                </p>
                                <div class="btncol  px-3 p-1 p-auto rounded-pill">
                                    <a href="" class="text-white fw-thin" style="text-decoration: none;">
                                        Pinjam
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->

                <!-- Book item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="bg-white rounded-lg shadow-lg"><img src="{{ asset('images/pangeran diponegoro.jpg') }}"
                            alt="bukuone" class="img-fluid card-img-top">
                        <div class="p-4">
                            <h5>Filosofi Teras</h5>
                            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                            <div
                                class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                        class="font-weight-bold">Stok</span>
                                </p>
                                <div class="btncol  px-3 p-1 p-auto rounded-pill">
                                    <a href="" class="text-white fw-thin" style="text-decoration: none;">
                                        Pinjam
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->

                <!-- Book item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="bg-white rounded-lg shadow-lg"><img src="{{ asset('images/pangeran diponegoro.jpg') }}"
                            alt="bukuone" class="img-fluid card-img-top">
                        <div class="p-4">
                            <h5>Filosofi Teras</h5>
                            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                            <div
                                class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                        class="font-weight-bold">Stok</span>
                                </p>
                                <div class="btncol  px-3 p-1 p-auto rounded-pill">
                                    <a href="" class="text-white fw-thin" style="text-decoration: none;">
                                        Pinjam
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->

                <!-- Book item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="bg-white rounded-lg shadow-lg"><img src="{{ asset('images/pangeran diponegoro.jpg') }}"
                            alt="bukuone" class="img-fluid card-img-top">
                        <div class="p-4">
                            <h5>Filosofi Teras</h5>
                            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                            <div
                                class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                        class="font-weight-bold">Stok</span>
                                </p>
                                <div class="btncol  px-3 p-1 p-auto rounded-pill">
                                    <a href="" class="text-white fw-thin" style="text-decoration: none;">
                                        Pinjam
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->

                <!-- Book item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="bg-white rounded-lg shadow-lg"><img src="{{ asset('images/pangeran diponegoro.jpg') }}"
                            alt="bukuone" class="img-fluid card-img-top">
                        <div class="p-4">
                            <h5>Filosofi Teras</h5>
                            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                            <div
                                class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                        class="font-weight-bold">Stok</span>
                                </p>
                                <div class="btncol  px-3 p-1 p-auto rounded-pill">
                                    <a href="" class="text-white fw-thin" style="text-decoration: none;">
                                        Pinjam
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->

                <!-- Book item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="bg-white rounded-lg shadow-lg"><img src="{{ asset('images/pangeran diponegoro.jpg') }}"
                            alt="bukuone" class="img-fluid card-img-top">
                        <div class="p-4">
                            <h5>Filosofi Teras</h5>
                            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                            <div
                                class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                        class="font-weight-bold">Stok</span>
                                </p>
                                <div class="btncol  px-3 p-1 p-auto rounded-pill">
                                    <a href="" class="text-white fw-thin" style="text-decoration: none;">
                                        Pinjam
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->

                <!-- Book item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="bg-white rounded-lg shadow-lg"><img src="{{ asset('images/pangeran diponegoro.jpg') }}"
                            alt="bukuone" class="img-fluid card-img-top">
                        <div class="p-4">
                            <h5>Filosofi Teras</h5>
                            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                            <div
                                class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                        class="font-weight-bold">Stok</span>
                                </p>
                                <div class="btncol  px-3 p-1 p-auto rounded-pill">
                                    <a href="" class="text-white fw-thin" style="text-decoration: none;">
                                        Pinjam
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->


            </div>
        </div>
    </div>

@endsection
