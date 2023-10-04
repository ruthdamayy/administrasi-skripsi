@extends('mahasiswa/layout')

@section('title')
    <title>Mahasiswa - Dashboard</title>
@endsection

@section('sidebar')
    <li class="sidebar-item active"">
        <a href="/mahasiswa/dashboard" class='sidebar-link'>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="sidebar-item">
        <a href="/mahasiswa/pra_sempro" class='sidebar-link'>
            <span>Seminar Proposal</span>
        </a>
    </li>

    <li class="sidebar-item ">
        <a href="/mahasiswa/pra_semhas" class='sidebar-link'>
            <span>Seminar Hasil</span>
        </a>
    </li>

    <li class="sidebar-item  ">
        <a href="/mahasiswa/pra_sidang" class='sidebar-link'>
            <span>Sidang Meja Hijau</span>
        </a>
    </li>

    <li class="sidebar-item  ">
        <a href="/mahasiswa/pasca_meja_hijau" class='sidebar-link'>
            <span>Pasca Sidang Meja Hijau</span>
        </a>
    </li>



    <li class="sidebar-item  ">
        <a href="{{ route('profile_mhs') }}" class='sidebar-link'>
            <span>Profil</span>
        </a>
    </li>
@endsection

@section('content')
    <div id="main">
        <header class="mb-2">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Dashboard</h3>
                        <p class="text-subtitle text-muted"> </p>
                    </div>
                    {{-- <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/mahasiswa/dashboard">Dashboard</a></li>
                            </ol>
                        </nav>
                    </div> --}}
                </div>
            </div>

            <!-- PROFILE - PROGRESS -->
            <div class="col-md-8 col-sm-12">
                <div class="card">
                    <div class="card-content">
                        <br>
                        @if ($profile->foto != null)
                            <center>
                                <img class="" src="../main/photos/{{ $profile->foto }}" alt="student_image"
                                    style="height: 200px; width:200px " />
                            </center>
                        @else
                            <center>
                                <img class="card-img-top img-fluid" src="../main/photos/graduate_student.png"
                                    alt="default_student_image" style="height: 200px; width:200px" />
                            </center>
                        @endif
                        <div class="card-body mt-1">
                            <h4 class="card-title text-center mt-1">{{ $profile->nama }}</h4>
                            <p class="card-text mt-1">
                                {{-- <div class="progress progress-primary  mb-2">
                                <div class="progress-bar progress-label" role="progressbar"
                                    style="width: {{ $percent }}%" aria-valuenow="{{ $percent }}"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div> --}}
                                <br>
                                Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $profile->nama }} <br>
                                NIM &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                {{ $profile->nim }} <br>
                                Angkatan &nbsp; &nbsp; : {{ $profile->angkatan }} <br>
                                Status &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $profile->status }}
                                <br><br>
                                Judul Skripsi&nbsp;&nbsp;: <br>
                                @if ($profile->judul_skripsi == null)
                                    <i>Judul Skripsi Belum Terdaftar</i><br><br>
                                @else
                                    <i>{{ $profile->judul_skripsi }}</i><br><br>
                                @endif

                                Tahap Tugas Akhir&nbsp;: <br>{{ $status_akses->keterangan }}.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- SHORTCUT 1 -->
                <div class="card">
                    <div class="card-content">
                        <div class="col-xl-6 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="/mahasiswa/pra_sempro">Seminar Proposal</a></h4>
                                        <p class="card-text">
                                            1. Pengajuan Calon Pembimbing <br>
                                            2. Pengajuan Executive Summary <br>
                                            3. Pengajuan Berkas Seminar Proposal<br>
                                            4. Pengecekan Jadwal Seminar <br>
                                            5. Bimbingan Seminar Proposal<br>
                                            6. Pengajuan dan Perbaiki Judul <br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SHORTCUT 1 -->
                {{-- Perbaiki untuk keterangan menu lain --}}
                <!-- SHORTCUT 2 -->
                <div class="card">
                    <div class="card-content">
                        <div class="col-xl-6 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="/mahasiswa/pra_semhas">Seminar Hasil</a></h4>
                                        <p class="card-text">
                                            1. Pengajuan Calon Pembimbing <br>
                                            2. Pengajuan Executive Summary <br>
                                            3. Pengajuan Berkas Seminar Proposal<br>
                                            4. Pengecekan Jadwal Seminar <br>
                                            5. Bimbingan Seminar Proposal<br>
                                            6. Pengajuan dan Perbaiki Judul <br>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SHORTCUT 2 -->
                <!-- SHORTCUT 3 -->
                <div class="card">
                    <div class="card-content">
                        <div class="col-xl-6 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="/mahasiswa/pra_sidang">Sidang Meja Hijau</a></h4>
                                        <p class="card-text">
                                            1. Pengajuan Calon Pembimbing <br>
                                            2. Pengajuan Executive Summary <br>
                                            3. Pengajuan Berkas Seminar Proposal<br>
                                            4. Pengecekan Jadwal Seminar <br>
                                            5. Bimbingan Seminar Proposal<br>
                                            6. Pengajuan dan Perbaiki Judul <br>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SHORTCUT 1 -->
                <!-- SHORTCUT 1 -->
                <div class="card">
                    <div class="card-content">
                        <div class="col-xl-6 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="/mahasiswa/pasca_sidang">Pasca Sidang Meja Hijau</a>
                                        </h4>
                                        <p class="card-text">
                                            1. Pengajuan Calon Pembimbing <br>
                                            2. Pengajuan Executive Summary <br>
                                            3. Pengajuan Berkas Seminar Proposal<br>
                                            4. Pengecekan Jadwal Seminar <br>
                                            5. Bimbingan Seminar Proposal<br>
                                            6. Pengajuan dan Perbaiki Judul <br>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SHORTCUT 1 -->
            </div>
            <!-- END PROFILE -->

            {{-- <div class="row">
                <div class="col-xl-8">
                    <div class="row">
                        <!-- SHORTCUT 1 -->
                        <div class="col-xl-6 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">Pra Seminar Proposal</h4>
                                        <p class="card-text">
                                            Berkas administrasi pra seminar proposal
                                        </p>
                                        <a href="/mahasiswa/pra_sempro" class="btn btn-primary btn-sm">Akses</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END SHORTCUT 1 -->

                        <!-- SHORTCUT 2 -->
                        <div class="col-xl-6 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">Pra Seminar Hasil</h4>
                                        <p class="card-text">
                                            Berkas Administrasi Pra Seminar Hasil
                                        </p>
                                        <a href="/mahasiswa/pra_semhas" class="btn btn-primary btn-sm"> Akses</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END SHORTCUT 2 -->

                        <!-- SHORTCUT 3 -->
                        <div class="col-xl-6 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">Pra Sidang Meja Hijau</h4>
                                        <p class="card-text">
                                            Berkas Administrasi Pra Sidang Meja Hijau
                                        </p>
                                        <a href="/mahasiswa/pra_sidang" class="btn btn-primary btn-sm">Akses</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END SHORTCUT 3 -->

                        <!-- SHORTCUT 4 -->
                        <div class="col-xl-6 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">Pasca Sidang Meja Hijau</h4>
                                        <p class="card-text">
                                            Proses lanjutan pra sidang meja hijau
                                        </p>
                                        <a href="pasca_meja_hijau" class="btn btn-primary btn-sm"> Akses</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END SHORTCUT 4 -->
                    </div>
                </div>


            </div> --}}
        </div>
    </div>
@endsection
