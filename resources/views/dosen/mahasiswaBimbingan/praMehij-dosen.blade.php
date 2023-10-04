@extends('dosen/layout')

@section('title')
    <title>Dosen - Pra-Meja Hijau</title>
@endsection

@section('sidebar')
    <li class="sidebar-item ">
        <a href="dashboard" class='sidebar-link'>

            <span>Dashboard</span>
        </a>
    </li>

    <!-- <li
                class="sidebar-item  ">
                <a href="profile" class='sidebar-link'>
                    
                    <span>Profile</span>
                </a>
            </li> -->

    <li class="sidebar-item has-sub ">
        <a href="{{ route('mahasiswa_ta') }}" class='sidebar-link'>
            <i class="bi bi-people-fill"></i>
            <span>Mahasiswa</span>
        </a>
        <ul class="submenu">
            <li class="submenu-item ">
                <a href="{{ route('mhs_aktif') }}">Mahasiswa Aktif</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('lulus') }}">Lulus / Alumni</a>
            </li>
        </ul>
    </li>

    <li class="sidebar-item  ">
        <a href="progresSkripsi" class='sidebar-link'>
            <i class="bi bi-graph-up"></i>
            <span>Progress Skripsi</span>
        </a>
    </li>

    <li class="sidebar-item ">
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="sidebar-link">
            @csrf
            <button class="btn" type="submit">
                <i class="bi bi-x-circle-fill"></i>
                <span>Logout</span>
            </button>
        </form>
    </li>
@endsection

@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Pra Meja Hijau</h3>
                        <p class="text-subtitle text-muted">Berita Acara Seminar Proposal</p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="sidMejaHijau">Sidang Meja Hijau</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dosen</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
                <div class="card h-100"style="max-width: 250px;">
                    <img src="{{ asset('assets/images/1.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Felix Kurnia Salim</h5>
                        <p class="card-text" style="font-family:times;">
                            Nim : 201402..</br>
                            Waktu : 09.00 WIB</br>
                            Tanggal : 4 Maret 2023</br>
                        </p>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal"><i class="bi bi-eye"></i>&nbsp;Lihat</button></a>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Felix Kurnia Salim</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <center><img src="{{ asset('assets/images/1.jpg') }}" width="300"></center></br>
                                        <p class="card-text" style="font-family:times;">
                                            Nim : 201402..</br>
                                            Waktu : 09.00 WIB</br>
                                            Tanggal : 4 Maret 2023</br>
                                            Judul Skripsi : mswkdkwn</br>
                                            Tahun Masuk : 2020</br>
                                            Prodi : Teknologi Informasi</br>
                                            Fakultas : Ilmu Komputer dan Teknologi Informasi</br>
                                            Deadline Skripsi : belum ditentukan</br>
                                        </p>
                                        <div class="col-md-6 col-12">
                                            <button id="basic" class="btn btn-outline-primary btn-lg btn-block"
                                                style="font-size: 75%;">Lembar Kendali Bimbingan Pra Sidang Meja
                                                Hijau</button>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col">
                <div class="card h-100" style="max-width: 250px;">
                    <img src="{{ asset('assets/images/5.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Monika Angelia Panjaitan</h5>
                        <p class="card-text" style="font-family:times;">
                            Nim : 201402010</br>
                            Waktu : 09.00 WIB</br>
                            Tanggal : 4 Maret 2023</br>
                        </p>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal1"><i class="bi bi-eye"></i>&nbsp;Lihat</button></a>
                        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel1">Monika Angelia panjaitan</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <center><img src="{{ asset('assets/images/5.jpg') }}" width="300"></center>
                                        </br>
                                        <p class="card-text" style="font-family:times;">
                                            Nim : 201402010</br>
                                            Waktu : 09.00 WIB</br>
                                            Tanggal : 4 Maret 2023</br>
                                            Judul Skripsi : mswkdkwn</br>
                                            Tahun Masuk : 2020</br>
                                            Prodi : Teknologi Informasi</br>
                                            Fakultas : Ilmu Komputer dan Teknologi Informasi</br>
                                            Deadline Skripsi : belum ditentukan</br>
                                        </p>
                                        <div class="col-md-6 col-12">
                                            <button id="basic" class="btn btn-outline-primary btn-lg btn-block"
                                                style="font-size: 75%;">Lembar Kendali Bimbingan Pra Sidang Meja
                                                Hijau</button>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" style="max-width: 250px;">
                    <img src="{{ asset('assets/images/6.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Putri Yanti Nahampun</h5>
                        <p class="card-text" style="font-family:times;">
                            Nim : 201402061</br>
                            Waktu : 09.00 WIB</br>
                            Tanggal : 5 Maret 2023</br>
                        </p>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal2"><i class="bi bi-eye"></i>&nbsp;Lihat</button></a>
                        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel2">Putri Yanti Nahampun</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <center><img src="{{ asset('assets/images/6.jpg') }}" width="300"></center>
                                        </br>
                                        <p class="card-text" style="font-family:times;">
                                            Nim : 201402061</br>
                                            Waktu : 09.00 WIB</br>
                                            Tanggal : 5 Maret 2023</br>
                                            Judul Skripsi : mswkdkwn</br>
                                            Tahun Masuk : 2020</br>
                                            Prodi : Teknologi Informasi</br>
                                            Fakultas : Ilmu Komputer dan Teknologi Informasi</br>
                                            Deadline Skripsi : belum ditentukan</br>
                                        </p>
                                        <div class="col-md-6 col-12">
                                            <button id="basic" class="btn btn-outline-primary btn-lg btn-block"
                                                style="font-size: 75%;">Lembar Kendali Bimbingan Pra Sidang Meja
                                                Hijau</button>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('assets/images/3.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Pahwana Br Sinulingga</h5>
                        <p class="card-text" style="font-family:times;">
                            Nim : 201402013</br>
                            Waktu : 09.00 WIB</br>
                            Tanggal : 8 Maret 2023</br>
                        </p>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal3"><i class="bi bi-eye"></i>&nbsp;Lihat</button></a>
                        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel3">Pahwana Br Sinulingga</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <center><img src="{{ asset('assets/images/3.jpg') }}" width="300"></center>
                                        </br>
                                        <p class="card-text" style="font-family:times;">
                                            Nim : 201402013</br>
                                            Waktu : 09.00 WIB</br>
                                            Tanggal : 8 Maret 2023</br>
                                            Judul Skripsi : mswkdkwn</br>
                                            Tahun Masuk : 2020</br>
                                            Prodi : Teknologi Informasi</br>
                                            Fakultas : Ilmu Komputer dan Teknologi Informasi</br>
                                            Deadline Skripsi : belum ditentukan</br>
                                        </p>
                                        <div class="col-md-6 col-12">
                                            <button id="basic" class="btn btn-outline-primary btn-lg btn-block"
                                                style="font-size: 75%;">Lembar Kendali Bimbingan Pra Sidang Meja
                                                Hijau</button>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('assets/images/5.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Ruth Damayanthy Purba</h5>
                        <p class="card-text" style="font-family:times;">
                            Nim : 201402028</br>
                            Waktu : 09.00 WIB</br>
                            Tanggal : 9 Maret 2023</br>
                        </p>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal4"><i class="bi bi-eye"></i>&nbsp;Lihat</button></a>
                        <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel4"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel4">Ruth Damayanthy Purba</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <center><img src="{{ asset('assets/images/5.jpg') }}" width="300"></center>
                                        </br>
                                        <p class="card-text" style="font-family:times;">
                                            Nim : 201402028</br>
                                            Waktu : 09.00 WIB</br>
                                            Tanggal : 9 Maret 2023</br>
                                            Judul Skripsi : mswkdkwn</br>
                                            Tahun Masuk : 2020</br>
                                            Prodi : Teknologi Informasi</br>
                                            Fakultas : Ilmu Komputer dan Teknologi Informasi</br>
                                            Deadline Skripsi : belum ditentukan</br>
                                        </p>
                                        <div class="col-md-6 col-12">
                                            <button id="basic" class="btn btn-outline-primary btn-lg btn-block"
                                                style="font-size: 75%;">Lembar Kendali Bimbingan Pra Sidang Meja
                                                Hijau</button>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('assets/images/3.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Della Febriana</h5>
                        <p class="card-text" style="font-family:times;">
                            Nim : 201402151</br>
                            Waktu : 09.00 WIB</br>
                            Tanggal : 9 Maret 2023</br>
                        </p>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal5"><i class="bi bi-eye"></i>&nbsp;Lihat</button></a>
                        <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel5"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel5">Della Febriana</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <center><img src="{{ asset('assets/images/3.jpg') }}" width="300"></center>
                                        </br>
                                        <p class="card-text" style="font-family:times;">
                                            Nim : 201402151</br>
                                            Waktu : 09.00 WIB</br>
                                            Tanggal : 9 Maret 2023</br>
                                            Judul Skripsi : mswkdkwn</br>
                                            Tahun Masuk : 2020</br>
                                            Prodi : Teknologi Informasi</br>
                                            Fakultas : Ilmu Komputer dan Teknologi Informasi</br>
                                            Deadline Skripsi : belum ditentukan</br>
                                        </p>
                                        <div class="col-md-6 col-12">
                                            <button id="basic" class="btn btn-outline-primary btn-lg btn-block"
                                                style="font-size: 75%;">Lembar Kendali Bimbingan Pra Sidang Meja
                                                Hijau</button>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('assets/images/4.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Reinaldhy Purba</h5>
                        <p class="card-text" style="font-family:times;">
                            Nim : 201402064</br>
                            Waktu : 09.00 WIB</br>
                            Tanggal : 13 Maret 2023</br>
                        </p>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal6"><i class="bi bi-eye"></i>&nbsp;Lihat</button></a>
                        <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel6"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel6">Reinaldhy Purba</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <center><img src="{{ asset('assets/images/4.jpg') }}" width="300"></center>
                                        </br>
                                        <p class="card-text" style="font-family:times;">
                                            Nim : 201402064</br>
                                            Waktu : 09.00 WIB</br>
                                            Tanggal : 4 Maret 2023</br>
                                            Judul Skripsi : mswkdkwn</br>
                                            Tahun Masuk : 2020</br>
                                            Prodi : Teknologi Informasi</br>
                                            Fakultas : Ilmu Komputer dan Teknologi Informasi</br>
                                            Deadline Skripsi : belum ditentukan</br>
                                        </p>
                                        <div class="col-md-6 col-12">
                                            <button id="basic" class="btn btn-outline-primary btn-lg btn-block"
                                                style="font-size: 75%;">Lembar Kendali Bimbingan Pra Sidang Meja
                                                Hijau</button>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
