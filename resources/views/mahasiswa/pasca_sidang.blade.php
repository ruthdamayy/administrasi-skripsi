@extends('mahasiswa/layout');

@section('title')
    <title>Mahasiswa - Pasca Sidang Meja Hijau</title>
@endsection

@section('sidebar')
    <li class="sidebar-item">
        <a href="/mahasiswa/dashboard" class='sidebar-link'>

            <span>Dashboard</span>
        </a>
    </li>

    <li class="sidebar-item">
        <a href="/mahasiswa/pra_seminar_proposal" class='sidebar-link'>

            <span>Seminar Proposal</span>
        </a>
    </li>

    <li class="sidebar-item">
        <a href="/mahasiswa/pra_semhas" class='sidebar-link'>

            <span>Seminar Hasil</span>
        </a>
    </li>

    <li class="sidebar-item">
        <a href="/mahasiswa/pra_sidang" class='sidebar-link'>

            <span>Sidang Meja Hijau</span>
        </a>
    </li>

    <li class="sidebar-item active">
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
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Pasca Sidang Meja Hijau </h3>
                        <p class="text-subtitle text-muted">Administrasi setelah lulus Sidang Sarjana</p>
                    </div>
                    {{-- <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/mahasiswa/dashboard">Mahasiswa</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Pasca Sidang Meja Hijau</li>
                            </ol>
                        </nav>
                    </div> --}}
                </div>
            </div>

            <!-- submenu 1 -->
            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">
                            <h3>1. Form Persetujuan Penggandaan Skripsi</h4>
                        </div>
                        <div class="card-body">
                            <p> Silahkan unduh form persetujuan penggandaan skripsi melalui tombol unduh dibawah ini. </p>

                            @if ($mhs->no_statusAkses > 6)
                                <div class="d-grid gap-2 d-md-flex justify-content">
                                    <a href="/mahasiswa/penggandaan_skripsi" target="blank"
                                        class="btn btn-success btn-sm"><i class="bi bi-download"></i> Unduh </a>
                                </div>
                            @else
                                <div class="d-grid gap-2 d-md-flex justify-content">
                                    <a href="#" class="btn btn-success btn-sm disabled"><i class="bi bi-download"></i>
                                        Unduh </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!-- end submenu 1 -->

            <!-- submenu 2 -->
            {{-- <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">
                            <h3>02. Jurnal / Paper</h4>
                        </div>
                        <div class="card-body">
                            <p> Berikut contoh paper untuk Anda gunakan sebagai panduan.
                                Silahkan unduh melalui <i>button</i> berikut ini. </p>
                            @if ($mhs->no_statusAkses > 6)
                                <div class="d-grid gap-2 d-md-flex justify-content">
                                    <a href="/mahasiswa/format_jurnal" class="btn btn-primary btn-sm" target="blank">
                                        <i class="bi bi-download"></i> Unduh
                                    </a>
                                </div>
                            @else
                                <div class="d-grid gap-2 d-md-flex justify-content">
                                    <a href="#" class="btn btn-primary btn-sm disabled">
                                        <i class="bi bi-download"></i> Unduh
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- end submenu 2 -->
        </div>
    @endsection
