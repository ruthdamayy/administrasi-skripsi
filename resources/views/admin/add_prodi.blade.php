@extends('admin/layout')

@section('title')
    <title>Admin - Tambahkan Akun Prodi</title>
@endsection

@section('sidebar')
    <li class="sidebar-item">
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

    <li class="sidebar-item has-sub active">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-person-badge-fill"></i>
            <span>Manajemen User</span>
        </a>
        <ul class="submenu">
            <li class="submenu-item ">
                <a href="/admin/manajemen_admin">Admin</a>
            </li>
            <li class="submenu-item active">
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
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Tambah Akun Prodi</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ '/mng_user' }}">Manajemen User</a></li>
                            <li class="breadcrumb-item"><a href="{{ '/admin/manajemen_dosen' }}">Prodi</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Daftar Baru</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section id="basic-horizontal-layouts">
            <div class="row match-height">
                <div class="card card-outline-secondary">
                    <div class="row align-items-center m-5">
                        <div class="col-md mb-5">
                            <!-- REGISTERATION FORM PRODI -->
                            <form class="form form-horizontal" method="POST" action="{{ route('add_prodi') }}">
                                @csrf
                                <div class="form-body">
                                    <div class="row">

                                        <!-- DATA AKUN -->
                                        <h3>1. Data Akun </h3> <br><br>
                                        <div class="col-md-4">
                                            <label for="username">Username</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="username"
                                                class="form-control  @error('username') is-invalid @enderror"
                                                name="username" value="{{ old('username') }}" autocomplete="name">
                                            @error('username')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="email">Email</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="email" id="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" autocomplete="email">
                                            @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="pw">Password</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="password" id="pw"
                                                class="form-control @error('pw') is-invalid @enderror" name="pw"
                                                value="{{ old('pw') }}" autocomplete="pw">
                                            @error('password')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <br><br>
                                        <hr><br>
                                        <!-- END DATA AKUN -->

                                        <!-- DATA PRIBADI ADMIN -->
                                        <h3>2. Data Diri</h3> <br><br>
                                        <div class="col-md-4">
                                            <label for="nama">Nama Lengkap</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="nama"
                                                class="form-control  @error('nama') is-invalid @enderror" name="nama"
                                                required value="{{ old('nama') }}" autocomplete="nama">
                                            @error('nama')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="nip">NIP</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="nip"
                                                class="form-control  @error('nip') is-invalid @enderror" name="nip"
                                                required value="{{ old('nip') }}" autocomplete="nip">
                                            @error('nip')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="nidn">NIDN</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="nidn"
                                                class="form-control  @error('nidn') is-invalid @enderror" name="nidn"
                                                required value="{{ old('nidn') }}" autocomplete="nidn">
                                            @error('nidn')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="kode">Kode Dosen</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="kode"
                                                class="form-control  @error('kode') is-invalid @enderror" name="kode"
                                                required value="{{ old('kode') }}" autocomplete="kode">
                                            @error('kode')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="sex">Jenis Kelamin</label>
                                        </div>
                                        <div class="col-md-8">
                                            <select class="form-control  @error('sex') is-invalid @enderror"
                                                id="sex" name="sex" required value="{{ old('sex') }}"
                                                autocomplete="sex">
                                                <option value=""></option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                            @error('sex')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <br><br><br>
                                        <!-- END DATA PRIBADI PRODI -->
                                        <center>
                                            <button type="submit" class="btn btn-primary"><i
                                                    class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
                                        </center>
                                    </div>
                                </div>
                            </form>
                            <!-- END REGISTERATION FORM DOSEN -->
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>
@endsection
