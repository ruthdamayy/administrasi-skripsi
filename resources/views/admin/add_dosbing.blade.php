@extends('admin/layout')

@section('title')
    <title>Admin - Tambahkan Dosen Pembimbing</title>
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

    <li class="sidebar-item has-sub active">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-file-earmark-medical-fill"></i>
            <span>Pra Seminar Proposal</span>
        </a>
        <ul class="submenu">
            <li class="submenu-item active">
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
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Daftarkan dosen pembimbing</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('prasempro_menu') }}">Pra Seminar Proposal</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Daftar Doping</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section id="basic-horizontal-layouts">
            <div class="row match-height">
                <div class="col-xl-10">
                    <div class="row">
                        <div class="card card-outline-secondary">
                            <center>
                                <img class="card-img-top img-fluid" src="../assets/images/dosbing.jpg"
                                    alt="lecturer_image" style="height: 400px;" />
                            </center>
                            <div class="row align-items-center m-5">
                                <div class="col-md mb-5">
                                    <!-- FORM DAFTAR JADWAL SEMPRO -->
                                    <form class="form form-horizontal" method="post"
                                        action="{{ route('store_dosbing') }}">
                                        @csrf
                                        <input type="hidden" name="nim" value="{{ $nim }}">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label for="nama">Nama</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input type="text" id="nama" class="form-control"
                                                        value="{{ $nama_mhs }}" disabled>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="nim">NIM</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input type="text" id="nim" class="form-control"
                                                        name="nim" value="{{ $nim }}" disabled>
                                                    @error('nim')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="col-md-4">
                                                    <label for="dosbing1">Doping I</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <select class="form-control  @error('dosbing1') is-invalid @enderror"
                                                        id="dosbing1" name="dosbing1" required
                                                        value="{{ old('dosbing1') }}" autocomplete="dosbing1">
                                                        <option value=""></option>
                                                        @foreach ($dosens as $dosen)
                                                            <option value="{{ $dosen->nip }}">{{ $dosen->nama }} -
                                                                {{ $dosen->nip }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('dosbing1')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <br><br>
                                                <div class="col-md-4">
                                                    <label for="dosbing2">Doping II</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <select class="form-control  @error('dosbing2') is-invalid @enderror"
                                                        id="dosbing2" name="dosbing2" required
                                                        value="{{ old('dosbing2') }}" autocomplete="dosbing2">
                                                        <option value=""></option>
                                                        @foreach ($dosens as $dosen)
                                                            <option value="{{ $dosen->nip }}">{{ $dosen->nama }} -
                                                                {{ $dosen->nip }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('dosbing2')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <br><br>
                                                <center>
                                                    <button type="submit" class="btn btn-primary"><i
                                                            class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
                                                </center>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END FORM DAFTAR JADWAL SEMPRO -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
