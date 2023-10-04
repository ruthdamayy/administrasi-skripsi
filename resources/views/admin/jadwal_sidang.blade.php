@extends('admin/layout')

@section('title')
    <title>Cetak Peserta Sidang</title>
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

    <li class="sidebar-item active">
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
                    <h3>Undangan & Daftar Peserta Sidang</h3>
                    <p class="text-subtitle text-muted">Cetak Undangan & Daftar Peserta Sidang Meja Hijau</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin/validasi_sidang">Pra Sidang Meja Hijau</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Berkas Administrasi Sidang</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section id="basic-horizontal-layouts">
            <div class="row match-height">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="card card-outline-secondary">
                            <div class="row align-items-center m-5">
                                <div class="col-md mb-5">
                                    <?php use Carbon\Carbon; ?>
                                    <!-- FORM -->
                                    <form class="form form-horizontal" method="post"
                                        action="{{ route('cetakUndanganSidang') }}">
                                        @csrf
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label for="tanggal_sidang">Cetak Undangan Sidang Meja Hijau</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <select
                                                        class="form-control  @error('tanggal_sidang') is-invalid @enderror"
                                                        id="tanggal_sidang" name="tanggal_sidang" required
                                                        value="{{ old('tanggal_sidang') }}"
                                                        autocomplete="tanggal_sidang">
                                                        <option value="">-- Pilih Jadwal Sidang Meja Hijau --
                                                        </option>
                                                        <?php $i; ?>
                                                        @for ($i = 0; $i <= count($query) - 1; $i++)
                                                            <option value="{{ $query[$i]->tanggal_sidang }}">
                                                                {{ Carbon::parse($query[$i]->tanggal_sidang)->translatedFormat('l / d F Y') }}
                                                            </option>
                                                        @endfor
                                                    </select>
                                                    @error('tanggal_sidang')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <br><br>
                                                <div class="col-md-2">
                                                    <button type="submit" class="btn btn-primary"><i
                                                            class="fa fa-save"></i>&nbsp;&nbsp;Cetak</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form><br><br>
                                    <form class="form form-horizontal" method="post"
                                        action="{{ route('cetakJadwalSidang') }}">
                                        @csrf
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label for="tanggal_sidang">Cetak Daftar Peserta Sidang Meja
                                                        Hijau</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <select
                                                        class="form-control  @error('tanggal_sidang') is-invalid @enderror"
                                                        id="tanggal_sidang" name="tanggal_sidang" required
                                                        value="{{ old('tanggal_sidang') }}"
                                                        autocomplete="tanggal_sidang">
                                                        <option value="">-- Pilih Jadwal Sidang Meja Hijau --
                                                        </option>
                                                        <?php $j; ?>
                                                        @for ($j = 0; $j <= count($query) - 1; $j++)
                                                            <option value="{{ $query[$j]->tanggal_sidang }}">
                                                                {{ Carbon::parse($query[$j]->tanggal_sidang)->translatedFormat('l / d F Y') }}
                                                            </option>
                                                        @endfor
                                                    </select>
                                                    @error('tanggal_sidang')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <br><br>
                                                <div class="col-md-2">
                                                    <button type="submit" class="btn btn-primary"><i
                                                            class="fa fa-save"></i>&nbsp;&nbsp;Cetak</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END FORM -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
