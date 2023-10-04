@extends('admin/layout')

@section('title')
    <title>Admin - Edit Judul Skripsi</title>
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
            <li class="submenu-item ">
                <a href="{{ route('daftar_dosbing') }}">Dosen Pembimbing</a>
            </li>
            <li class="submenu-item active">
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
                    <h3>Edit Judul Skripsi</h3>
                    <p class="text-subtitle text-muted">Menu pra seminar proposal</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('prasempro_menu') }}">Pra Seminar Proposal</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('daftar_skripsi') }}">Judul Skripsi</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Judul</li>
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
                            <!-- FORM EDIT JUDUL SKRIPSI -->
                            <form class="form form-horizontal" action="{{ route('storeNewSkripsi') }}" method="POST">
                                @csrf
                                <input type="hidden" value="{{ $mahasiswa->nim }}" name="nim">
                                <input type="hidden" value="{{ $mahasiswa->judul_skripsi }}" name="old_judul_skripsi">
                                <input type="hidden" value="{{ $mahasiswa->eng_judul_skripsi }}"
                                    name="old_eng_judul_skripsi">
                                <input type="hidden" value="{{ $mahasiswa->bidang_ilmu }}" name="old_bid_ilmu">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>NIM</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" value="{{ $mahasiswa->nim }}"
                                                autocomplete="nim" disabled>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="new_judul_skripsi">Judul Skripsi</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="new_judul_skripsi"
                                                class="form-control  @error('new_judul_skripsi') is-invalid @enderror"
                                                value="{{ $mahasiswa->judul_skripsi }}" name="new_judul_skripsi"
                                                autocomplete="new_judul_skripsi">
                                            @error('new_judul_skripsi')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="new_eng_judul_skripsi">Judul Skripsi Bahasa Inggris</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="new_eng_judul_skripsi"
                                                class="form-control  @error('new_eng_judul_skripsi') is-invalid @enderror"
                                                value="{{ $mahasiswa->eng_judul_skripsi }}" name="new_eng_judul_skripsi"
                                                autocomplete="new_eng_judul_skripsi">
                                            @error('new_eng_judul_skripsi')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-4">
                                            <label for="new_bid_ilmu">Bidang Ilmu</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <select id="new_bid_ilmu"
                                                class="form-control  @error('new_bid_ilmu') is-invalid @enderror"
                                                value="{{ $mahasiswa->bidang_ilmu }}" name="new_bid_ilmu"
                                                autocomplete="new_bid_ilmu">
                                                <option value="{{ $mahasiswa->bidang_ilmu }}">
                                                    {{ $mahasiswa->bidang_ilmu }}</option>
                                                @foreach ($bidang_ilmu as $bid)
                                                    <option value="{{ $bid->bidang_ilmu }}">{{ $bid->bidang_ilmu }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('new_bid_ilmu')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <br>
                                        <center>
                                            <button type="submit" class="btn btn-primary"><i
                                                    class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
                                        </center>
                                    </div>
                                </div>
                            </form>
                            <!-- END FORM EDIT JUDUL SKRIPSI -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    </div>
@endsection
