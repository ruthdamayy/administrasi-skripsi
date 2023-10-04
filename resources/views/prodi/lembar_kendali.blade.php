@extends('prodi/layout')

@section('title')
    <title>Prodi - Lembar Kendali</title>
@endsection

@section('sidebar')
    <li class="sidebar-item">
        <a href="/prodi/dashboard" class='sidebar-link'>

            <span>Dashboard</span>
        </a>
    </li>

    <li class="sidebar-item has-sub active">
        <a href="/prodi/menu_mahasiswa" class='sidebar-link'>
            <i class="bi bi-people-fill"></i>
            <span>Mahasiswa TA</span>
        </a>
        <ul class="submenu">
            <li class="submenu-item active">
                <a href="/prodi/menu_mahasiswa/mahasiswa_aktif">Mahasiswa Aktif</a>
            </li>
            <li class="submenu-item ">
                <a href="/kaprodi/menu_mahasiswa/mahasiswa_alumni">Lulus / Alumni</a>
            </li>
        </ul>
    </li>

    <li class="sidebar-item ">
        <a href="/prodi/beritaacara" class='sidebar-link'>

            <span>Berita Acara</span>
        </a>
    </li>

    <li class="sidebar-item  ">
        <a href="/prodi/undangan_daftar_peserta" class='sidebar-link'>

            <span>Undangan dan Daftar Peserta</span>
        </a>
    </li>
    <li class="sidebar-item has-sub ">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-clipboard-plus"></i>
            <span>Input Nilai</span>
        </a>
        <ul class="submenu">
            <li class="submenu-item ">
                <a href="{{ route('nilai_IPK') }}">Input Nilai IPK</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('nilai_uji_program') }}">Input Nilai Uji Program</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('nilai_semhas') }}">Input Nilai Seminar Hasil</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('nilai_sidang') }}">Input Nilai Sidang Meja Hijau</a>
            </li>
        </ul>
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
                        <h3>Lembar Kendali Bimbingan Skripsi</h3>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/prodi/menu_mahasiswa/mahasiswa_aktif">Mahasiswa TA</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Lembar Kendali</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- submenu 1 -->
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <h5>01. Lembar Kendali Pra Seminar Proposal</h5>
                    </div>
                    <div class="card-body">
                        <p>Lembar kendali bimbingan skripsi pra seminar proposal.</p>
                        <hr>
                        <a href="/prodi/lembar_kendali_sempro/{{ $nim }}" class="btn btn-primary"><i
                                class="bi bi-printer-fill"></i> Cetak </a>

                    </div>
                </div>
            </div>
        </div>
        <!-- end submenu 1 -->

        <!-- submenu 2 -->
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <h5>02. Lembar Kendali Pra Seminar Hasil</h5>
                    </div>
                    <div class="card-body">
                        <p>Lembar kendali bimbingan skripsi pra seminar hasil.</p>
                        <hr>
                        <a href="/prodi/lembar_kendali_semhas/{{ $nim }}" class="btn btn-primary"><i
                                class="bi bi-printer-fill"></i> Cetak </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end submenu 2 -->

        <!-- submenu 3 -->
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <h5>03. Lembar Kendali Pra Sidang Meja Hijau</h5>
                    </div>
                    <div class="card-body">
                        <p>Lembar kendali bimbingan skripsi pra sidang meja hijau.</p>
                        <hr>
                        <a href="/prodi/lembar_kendali_sidang/{{ $nim }}" class="btn btn-primary"><i
                                class="bi bi-printer-fill"></i> Cetak </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end submenu 3 -->
    @endsection
