@extends('admin/layout')

@section('title')
    <title>Admin - Dashboard</title>
@endsection

@section('sidebar')
    <li class="sidebar-item active">
        <a href="/admin/dashboard" class='sidebar-link'>

            <span>Dashboard</span>
        </a>
    </li>

    <li class="sidebar-item has-sub">
        <a href="{{ route('mhs_ta') }}" class='sidebar-link'>
            <i class="bi bi-people-fill"></i>
            <span>Mahasiswa TA</span>
        </a>
        <ul class="submenu">
            <li class="submenu-item ">
                <a href="{{ route('aktif') }}">Mahasiswa Aktif</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('alumni') }}">Lulus / Alumni</a>
            </li>
        </ul>
    </li>

    <li class="sidebar-item has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-file-earmark-medical-fill"></i>
            <span>Pra Seminar Proposal</span>
        </a>
        <ul class="submenu">
            <li class="submenu-item ">
                <a href="{{ route('daftar_dosbing') }}">Dosen Pembimbing</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('daftar_skripsi') }}">Judul Skripsi</a>
            </li>
            <li class="submenu-item ">
                <a href="/admin/validasi_sempro">Berkas Administrasi</a>
            </li>
        </ul>
    </li>

    <li class="sidebar-item has-sub">
        <a href="{{ route('prasemhas_menu') }}" class='sidebar-link'>
            <i class="bi bi-file-earmark-medical-fill"></i>
            <span>Pra Seminar Hasil</span>
        </a>
        <ul class="submenu">
            <li class="submenu-item ">
                <a href="{{ route('daftar_dosenPenguji') }}">Dosen Penguji</a>
            </li>
            <li class="submenu-item ">
                <a href="/admin/validasi_semhas">Berkas Administrasi</a>
            </li>
        </ul>
    </li>

    <li class="sidebar-item">
        <a href="/admin/validasi_sidang" class='sidebar-link'>
            <i class="bi bi-file-earmark-medical-fill"></i>
            <span>Pra Sidang Meja Hijau</span>
        </a>
    </li>

    <li class="sidebar-item has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-person-badge-fill"></i>
            <span>Manajemen User</span>
        </a>
        <ul class="submenu">
            <li class="submenu-item ">
                <a href="/admin/manajemen_admin">Admin</a>
            </li>
            <li class="submenu-item ">
                <a href="/admin/manajemen_prodi">Prodi</a>
            </li>
            <li class="submenu-item ">
                <a href="/admin/manajemen_dosen">Dosen</a>
            </li>
            <li class="submenu-item ">
                <a href="/admin/manajemen_mhs">Mahasiswa</a>
            </li>
        </ul>
    </li>

    <li class="sidebar-item has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-pen-fill"></i>
            <span>Penjadwalan</span>
        </a>
        <ul class="submenu">
            <li class="submenu-item ">
                <a href="{{ route('jadwal_sempro') }}">Seminar Proposal</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('jadwal_semhas') }}">Seminar Hasil</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('jadwal_sidang') }}">Sidang Meja Hijau</a>
            </li>
        </ul>
    </li>

    <li class="sidebar-item has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-clock-history"></i>
            <span>Riwayat Aktivitas</span>
        </a>
        <ul class="submenu">
            <li class="submenu-item ">
                <a href="{{ route('log_pendaftaran_dosbing') }}">Riwayat Pendaftaran Dosbing</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('log_pengubahan_dosbing') }}">Riwayat Pengubahan Dosbing</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('log_penghapusan_dosbing') }}">Riwayat Penghapusan Dosbing</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('log_pendaftaran_skripsi') }}">Riwayat Pendaftaran Judul Skripsi</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('log_pengubahan_skripsi') }}">Riwayat Pengubahan Skripsi</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('log_penghapusan_skripsi') }}">Riwayat Penghapusan Skripsi</a>
            </li>
        </ul>
    </li>

    <li class="sidebar-item">
        <a href="{{ route('profile_admin') }}" class='sidebar-link'>

            <span>Profil</span>
        </a>
    </li>

    <li class="sidebar-item has-sub ">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-clipboard-plus"></i>
            <span>Input Nilai</span>
        </a>
        <ul class="submenu">
            <li class="submenu-item ">
                <a href="{{ route('adm_nilai_IPK') }}">Input Nilai IPK</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('adm_nilai_uji_program') }}">Input Nilai Uji Program</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('adm_nilai_semhas') }}">Input Nilai Seminar Hasil</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('nilai_sidang_admin') }}">Input Nilai Sidang Meja Hijau</a>
            </li>
        </ul>
    </li>
@endsection

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-xl-8 col-md-6 order-md-1 order-last">
                    <h3>Selamat datang kembali, {{ Auth::user()->admin->nama }} !</h3>
                    <br><br>
                </div>
                <div class="col-xl-4 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ '/admin/dashboard' }}">Dashboard</a></li>
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
                                <h4 class="card-title">Mahasiswa Tingkat Akhir</h4>
                                <p>Lihat daftar mahasiswa tingkat akhir, data skripsi, dan dosen pembimbing disini! </p>
                                <hr>
                                <a href="{{ route('mhs_ta') }}" class="btn btn-primary btn-sm"><i
                                        class="bi bi-check-circle"></i> Access</a>
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
                                <h4 class="card-title">Input Nilai</h4>
                                <p>Menginput nilai uji program, seminar hasil, dan sidang meja hijau disini! </p>
                                <hr>
                                <a href="{{ route('adm_input_nilai') }}" class="btn btn-primary btn-sm"><i
                                        class="bi bi-check-circle"></i> Access</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SHORTCUT 2 -->

                <!-- SHORTCUT 3 -->
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title">Pra Seminar Proposal</h4>
                                <p>Mengurus administrasi mahasiswa pada masa pra seminar proposal disini! </p>
                                <hr>
                                <a href="{{ route('prasempro_menu') }}" class="btn btn-primary btn-sm"><i
                                        class="bi bi-check-circle"></i> Access</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SHORTCUT 3-->

                <!-- SHORTCUT 4 -->
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title">Pra Seminar Hasil</h4>
                                <p>Mengurus administrasi mahasiswa pada masa pra seminar hasil disini! </p>
                                <hr>
                                <a href="/admin/validasi_semhas" class="btn btn-primary btn-sm"><i
                                        class="bi bi-check-circle"></i> Access</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SHORTCUT 4 -->

                <!-- SHORTCUT 5 -->
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title">Pra Sidang Meja Hijau</h4>
                                <p>Mengurus administrasi mahasiswa pada masa pra sidang meja hijau disini!</p>
                                <hr>
                                <a href="/admin/validasi_sidang" class="btn btn-primary btn-sm"><i
                                        class="bi bi-check-circle"></i> Access</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SHORTCUT 5 -->

                <!-- SHORTCUT 6 -->
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title">Manajemen Pengguna</h4>
                                <p>Mendaftarkan mahasiswa, dosen, dan sebagainya disini!</p>
                                <hr>
                                <a href="/admin/mng_user" class="btn btn-primary btn-sm"><i
                                        class="bi bi-check-circle"></i> Access</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SHORTCUT 6 -->

                <!-- SHORTCUT 7 -->
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title">Penjadwalan</h4>
                                <p>Mendaftarkan jadwal seminar proposal, seminar hasil, dan sidang untuk mahasiswa disini!
                                </p>
                                <hr>
                                <a href="{{ route('penjadwalan') }}" class="btn btn-primary btn-sm"><i
                                        class="bi bi-check-circle"></i> Access</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SHORTCUT 7 -->

                <!-- SHORTCUT 8 -->
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title">Riwayat Aktivitas</h4>
                                <p>Riwayat pendaftaran, pengeditan hingga penghapusan data dosen pembimbing dan skripsi!</p>
                                <hr>
                                <a href="{{ route('log_aktivitas') }}" class="btn btn-primary btn-sm"><i
                                        class="bi bi-check-circle"></i> Access</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SHORTCUT 8 -->

                <!-- SHORTCUT 9 -->
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title">Profil</h4>
                                <p>Mengedit profile.</p>
                                <hr>
                                <a href="{{ route('profile_admin') }}" class="btn btn-primary btn-sm"><i
                                        class="bi bi-check-circle"></i> Access</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SHORTCUT 9 -->


            </div>
        </section>
    </div>
@endsection
