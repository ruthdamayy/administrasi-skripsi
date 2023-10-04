@extends('dosen.layout')

@section('title')
    <title>Dosen - Progres Skripsi</title>
@endsection

@section('sidebar')
    <li class="sidebar-item  ">
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

    <li class="sidebar-item  ">
        <a href="bimbinganSkripsi" class='sidebar-link'>
            <i class="bi bi-journal-bookmark-fill"></i>
            <span>Bimbingan Skripsi</span>
        </a>
    </li>

    <li class="sidebar-item active ">
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

@section('sidebar')
    <li class="sidebar-item active   ">
        <a href="dashboard" class='sidebar-link'>

            <span>Dashboard</span>
        </a>
    </li>

    <li class="sidebar-item  ">
        <a href="profile" class='sidebar-link'>

            <span>Profile</span>
        </a>
    </li>

    <li class="sidebar-item  ">
        <a href="bimbinganSkripsi" class='sidebar-link'>
            <i class="bi bi-journal-bookmark-fill"></i>
            <span>Mahasiswa</span>
        </a>
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
                        <h3>Mahasiswa Bimbingan</h3>
                        <p class="text-subtitle text-muted">Persetujuan Seminar Hasil</p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="progresSkripsi">Progress Skripsi</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dosen</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <section class="section">
            <div class="card">
                <div class="card-body">
                    <table class="table" id="table1">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Nama</th>
                                <th>Persentase</th>
                                <th>Keterangan</th>
                                <th>Rincian Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="{{ asset('assets/images/1.jpg') }}" width="40" alt="avatar"></td>
                                <td>Felix Kurnia Salim</td>
                                <td>
                                    80%
                                </td>
                                <td>Sedang Mempersiapkan Sempro</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"><i class="bi bi-eye"></i>&nbsp;Lihat</button></a>
                                </td>
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
                                                <center><img src="{{ asset('assets/images/1.jpg') }}" width="300">
                                                </center></br>
                                                <p class="card-text" style="font-family:times;">
                                                    Nim : 201402..</br>
                                                    Waktu : 09.00 WIB</br>
                                                    Tanggal : 4 Maret 2023</br>
                                                    Judul Skripsi : mswkdkwn</br>
                                                    Tahun Masuk : 2020</br>
                                                    Prodi : Teknologi Informasi</br>
                                                    Fakultas : Ilmu Komputer dan Teknologi Informasi</br>
                                                    Deadline Kelulusan : belum ditentukan</br>
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>

                            <tr>
                                <td><img src="{{ asset('assets/images/5.jpg') }}" width="40" alt="avatar"></td>
                                <td>Monika Angelia Panjaitan</td>
                                <td>
                                    20%
                                </td>
                                <td>Sedang Mempersiapkan Seminar Hasil</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal1"><i class="bi bi-eye"></i>&nbsp;Lihat</button></a>
                                </td>
                                <div class="modal fade" id="exampleModal1" tabindex="-1"
                                    aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel1">Monika Angelia Panjaitan
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <center><img src="{{ asset('assets/images/5.jpg') }}" width="300">
                                                </center></br>
                                                <p class="card-text" style="font-family:times;">
                                                    Nim : 201402010</br>
                                                    Waktu : 09.00 WIB</br>
                                                    Tanggal : 4 Maret 2023</br>
                                                    Judul Skripsi : mswkdkwn</br>
                                                    Tahun Masuk : 2020</br>
                                                    Prodi : Teknologi Informasi</br>
                                                    Fakultas : Ilmu Komputer dan Teknologi Informasi</br>
                                                    Deadline Kelulusan : belum ditentukan</br>
                                                </p>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>

                            <tr>
                                <td><img src="{{ asset('assets/images/6.jpg') }}" width="40" alt="avatar"></td>
                                <td>Putri Yanti Nahampun</td>
                                <td>
                                    68%
                                </td>
                                <td>Sedang Mempersiapkan Pra-Meja Hijau</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal2"><i class="bi bi-eye"></i>&nbsp;Lihat</button></a>
                                </td>
                                <div class="modal fade" id="exampleModal2" tabindex="-1"
                                    aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel2">Putri Yanti Nahampunt</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <center><img src="{{ asset('assets/images/6.jpg') }}" width="300">
                                                </center></br>
                                                <p class="card-text" style="font-family:times;">
                                                    Nim : 201402061</br>
                                                    Waktu : 09.00 WIB</br>
                                                    Tanggal : 5 Maret 2023</br>
                                                    Judul Skripsi : mswkdkwn</br>
                                                    Tahun Masuk : 2020</br>
                                                    Prodi : Teknologi Informasi</br>
                                                    Fakultas : Ilmu Komputer dan Teknologi Informasi</br>
                                                    Deadline Kelulusan : belum ditentukan</br>
                                                </p>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>

                            <tr>
                                <td><img src="{{ asset('assets/images/3.jpg') }}" width="40" alt="avatar"></td>
                                <td>Pahwana Br Sinulingga</td>
                                <td>70%</td>
                                <td>Sedang Mempersiapkan Sidang Meja Hijau</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal3"><i class="bi bi-eye"></i>&nbsp;Lihat</button></a>
                                </td>
                                <div class="modal fade" id="exampleModal3" tabindex="-1"
                                    aria-labelledby="exampleModalLabel3" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel3">Pahwana Br Sinulingga</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <center><img src="{{ asset('assets/images/3.jpg') }}" width="300">
                                                </center></br>
                                                <p class="card-text" style="font-family:times;">
                                                    Nim : 201402013</br>
                                                    Waktu : 09.00 WIB</br>
                                                    Tanggal : 8 Maret 2023</br>
                                                    Judul Skripsi : mswkdkwn</br>
                                                    Tahun Masuk : 2020</br>
                                                    Prodi : Teknologi Informasi</br>
                                                    Fakultas : Ilmu Komputer dan Teknologi Informasi</br>
                                                    Deadline Kelulusan: belum ditentukan</br>
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>

                            <tr>
                                <td><img src="{{ asset('assets/images/5.jpg') }}" width="40" alt="avatar"></td>
                                <td>Ruth Damayanthy Purba</td>
                                <td>
                                    76%
                                </td>
                                <td>Sedang Mempersiapkan Pasca Meja Hijau</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal4"><i class="bi bi-eye"></i>&nbsp;Lihat</button></a>
                                </td>
                                <div class="modal fade" id="exampleModal4" tabindex="-1"
                                    aria-labelledby="exampleModalLabel4" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel4">Ruth Damayanthy Purba</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <center><img src="{{ asset('assets/images/5.jpg') }}" width="300">
                                                </center></br>
                                                <p class="card-text" style="font-family:times;">
                                                    Nim : 201402028</br>
                                                    Waktu : 09.00 WIB</br>
                                                    Tanggal : 8 Maret 2023</br>
                                                    Judul Skripsi : mswkdkwn</br>
                                                    Tahun Masuk : 2020</br>
                                                    Prodi : Teknologi Informasi</br>
                                                    Fakultas : Ilmu Komputer dan Teknologi Informasi</br>
                                                    Deadline Kelulusan: belum ditentukan</br>
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>

                            <tr>
                                <td><img src="{{ asset('assets/images/3.jpg') }}" width="40" alt="avatar"></td>
                                <td>Della Febriana</td>
                                <td>
                                    87%
                                </td>
                                <td>Selesai</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal5"><i class="bi bi-eye"></i>&nbsp;Lihat</button></a>
                                </td>
                                <div class="modal fade" id="exampleModal5" tabindex="-1"
                                    aria-labelledby="exampleModalLabel5" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel5">Della Febriana</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <center><img src="{{ asset('assets/images/3.jpg') }}" width="300">
                                                </center></br>
                                                <p class="card-text" style="font-family:times;">
                                                    Nim : 201402151</br>
                                                    Waktu : 09.00 WIB</br>
                                                    Tanggal : 8 Maret 2023</br>
                                                    Judul Skripsi : mswkdkwn</br>
                                                    Tahun Masuk : 2020</br>
                                                    Prodi : Teknologi Informasi</br>
                                                    Fakultas : Ilmu Komputer dan Teknologi Informasi</br>
                                                    Deadline Kelulusan: belum ditentukan</br>
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>

                            <tr>
                                <td><img src="{{ asset('assets/images/4.jpg') }}" width="40" alt="avatar"></td>
                                <td>Reinaldhy Purba</td>
                                <td>
                                    78%
                                </td>
                                <td>Selesai</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal6"><i class="bi bi-eye"></i>&nbsp;Lihat</button></a>
                                </td>
                                <div class="modal fade" id="exampleModal6" tabindex="-1"
                                    aria-labelledby="exampleModalLabel6" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel6">Reinaldhy Purba</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <center><img src="{{ asset('assets/images/4.jpg') }}" width="300">
                                                </center></br>
                                                <p class="card-text" style="font-family:times;">
                                                    Nim : 201402064</br>
                                                    Waktu : 09.00 WIB</br>
                                                    Tanggal : 8 Maret 2023</br>
                                                    Judul Skripsi : mswkdkwn</br>
                                                    Tahun Masuk : 2020</br>
                                                    Prodi : Teknologi Informasi</br>
                                                    Fakultas : Ilmu Komputer dan Teknologi Informasi</br>
                                                    Deadline Kelulusan: belum ditentukan</br>
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

        </section>
        <!-- Basic Tables end -->
    </div>

    </div>
    </div>
@endsection
