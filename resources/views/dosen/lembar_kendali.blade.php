@extends('dosen/layout')

@section('title')
    <title>Dosen - Lembar Kendali Mahasiswa</title>
@endsection

@section('sidebar')
    <li class="sidebar-item">
        <a href="/dosen/dashboard" class='sidebar-link'>

            <span>Dashboard</span>
        </a>
    </li>

    <li class="sidebar-item has-sub active">
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

    <li class="sidebar-item">
        <a href="/dosen/jadwalSeminarSidang" class='sidebar-link'>
            <i class="bi bi-calendar-date"></i>
            <span>Jadwal Seminar/Sidang</span>
        </a>
    </li>
@endsection

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-xl-8 col-md-6 order-md-1 order-last">
                    <h3>Lembar Kendali Bimbingan Skripsi</h3>
                    <br><br>
                </div>
                <div class="col-xl-4 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dosen/mahasiswaTA">Mahasiswa</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Lembar Kendali</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section id="content-types">
            <div class="row justify-content-start">
                <!-- SHORTCUT 1 -->
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title">Lembar Kendali Pra Seminar Proposal</h4>
                                <p>Lembar Kendali Bimbingan Skripsi Pra Seminar Proposal</p>
                                <hr>
                                <center><a href="/dosen/lembar_kendali_sempro/{{ $nim }}"
                                        class="btn btn-success btn-sm"><i class="bi bi-printer-fill"></i> Cetak</a>
                                </center>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SHORTCUT 1 -->

                <!-- SHORTCUT 2 -->
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title">Lembar Kendali Pra Seminar Hasil</h4>
                                <p>Lembar Kendali Bimbingan Skripsi Pra Seminar Proposal </p>
                                <hr>
                                <center><a href="/dosen/lembar_kendali_semhas/{{ $nim }}"
                                        class="btn btn-success btn-sm"><i class="bi bi-printer-fill"></i> Cetak</a></center>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SHORTCUT 2-->

                <!-- SHORTCUT 3 -->
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title">Lembar Kendali Pra Sidang Meja Hijau</h4>
                                <p>Lembar Kendali Bimbingan Skripsi Pra Sidang Meja Hijau </p>
                                <hr>
                                <center><a href="/dosen/lembar_kendali_sidang/{{ $nim }}"
                                        class="btn btn-success btn-sm"><i class="bi bi-printer-fill"></i> Cetak</a>
                                </center>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SHORTCUT 3-->

            </div>
        </section>
    </div>
@endsection
