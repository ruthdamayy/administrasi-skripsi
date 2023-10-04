<?php use Carbon\Carbon; ?>
@extends('admin/layout')

@section('title')
    <title>Admin - Penjadwalan Seminar Proposal</title>
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

    <li class="sidebar-item has-sub active">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-pen-fill"></i>
            <span>Penjadwalan</span>
        </a>
        <ul class="submenu">
            <li class="submenu-item active">
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
                    <h3>Penjadwalan Seminar Proposal</h3>
                    <p class="text-subtitle text-muted">Penjadwalan Seminar Proposal Mahasiswa</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Penjadwalan</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Seminar Proposal</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section id="basic-horizontal-layouts">
            <div class="row match-height">
                <div class="card card-outline-secondary">
                    <div class="row align-items-center m-5">
                        <div class="col-xl-12 mb-6">
                            <!-- DAFTAR ADMIN    -->
                            <h5>Jadwal Seminar Proposal Mahasiswa</h5></br>
                            <table>
                                <tr>
                                    <th class="text-sm">Cetak Undangan</th>
                                    <th colspan="3"></th>
                                    <th class="text-sm">Cetak Daftar Peserta</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form method="post" action="{{ route('cetakUndanganSempro') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-xl-8">
                                                    <select
                                                        class="form-control  @error('tanggal_sempro') is-invalid @enderror"
                                                        id="tanggal_sempro" name="tanggal_sempro" required
                                                        value="{{ old('tanggal_sempro') }}"
                                                        autocomplete="tanggal_sempro">
                                                        <option value="">-- Pilih Jadwal Sempro --</option>
                                                        <?php $i; ?>
                                                        @for ($i = 0; $i <= count($query) - 1; $i++)
                                                            <option value="{{ $query[$i]->tanggal_sempro }}">
                                                                {{ Carbon::parse($query[$i]->tanggal_sempro)->translatedFormat('l / d F Y') }}
                                                            </option>
                                                        @endfor
                                                    </select>
                                                    @error('tanggal_sempro')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-xl-4">
                                                    <button type="submit" class="btn btn-primary btn-sm text-sm"><i
                                                            class="bi bi-printer-fill"></i>&nbsp;&nbsp;Cetak</button>
                                                </div>
                                        </form>
                                    </td>
                                    <td colspan="3">
                                        &nbsp; &nbsp;
                                    </td>
                                    <td>
                                        <form method="post" action="{{ route('cetakJadwalSempro') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-xl-8">
                                                    <select
                                                        class="form-control  @error('tanggal_sempro') is-invalid @enderror"
                                                        id="tanggal_sempro" name="tanggal_sempro" required
                                                        value="{{ old('tanggal_sempro') }}"
                                                        autocomplete="tanggal_sempro">
                                                        <option value="">-- Pilih Jadwal Sempro --</option>
                                                        <?php $j; ?>
                                                        @for ($j = 0; $j <= count($query) - 1; $j++)
                                                            <option value="{{ $query[$j]->tanggal_sempro }}">
                                                                {{ Carbon::parse($query[$j]->tanggal_sempro)->translatedFormat('l / d F Y') }}
                                                            </option>
                                                        @endfor
                                                    </select>
                                                    @error('tanggal_sempro')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-xl-4">
                                                    <button type="submit" class="btn btn-primary btn-sm text-sm"><i
                                                            class="bi bi-printer-fill"></i>&nbsp;&nbsp;Cetak</button>
                                                </div>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            </table>
                            <br>
                            <div class="table-responsive">
                                @if (session('status'))
                                    <div class="alert alert-success alert-dismissible show fade">
                                        <i class="bi bi-check-circle"></i> {{ session('status') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif
                                <table class="table table-bordered mb-0">
                                    <thead class="text-center">
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama/NIM</th>
                                            <th>Tanggal Sempro</th>
                                            <th>Waktu</th>
                                            <th>Tempat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        @foreach ($mahasiswas as $mahasiswa)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td class="text-bold-500">{{ $mahasiswa->nama }} - {{ $mahasiswa->nim }}
                                                </td>
                                                <td>
                                                    @if ($mahasiswa->tanggal_sempro == null)
                                                        <p>Belum terdaftar.</p>
                                                    @else
                                                        {{ $mahasiswa->tanggal_sempro }}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($mahasiswa->tanggal_sempro == null)
                                                        <p>Belum terdaftar.</p>
                                                    @else
                                                        {{ date('H.i', strtotime($mahasiswa->waktu)) }}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($mahasiswa->tanggal_sempro == null)
                                                        <p>Belum terdaftar.</p>
                                                    @else
                                                        {{ $mahasiswa->tempat }}
                                                    @endif
                                                </td>
                                                <td>
                                                    <center>
                                                        <table>
                                                            <tr>
                                                                @if ($mahasiswa->tanggal_sempro == null)
                                                                    <td>
                                                                        <form action="{{ route('add_jd_sempro') }}">
                                                                            @csrf
                                                                            <input type="hidden" name="nim"
                                                                                value="{{ $mahasiswa->nim }}">
                                                                            <input type="hidden" name="nama"
                                                                                value="{{ $mahasiswa->nama }}">
                                                                            <button type="submit"
                                                                                class="btn btn-success btn-sm"><i
                                                                                    class="bi bi-plus-square"></i>&nbsp;&nbsp;Jadwalkan</button>
                                                                        </form>
                                                                    </td>
                                                                @endif
                                                                @if ($mahasiswa->tanggal_sempro != null)
                                                                    <td>
                                                                        <form action="{{ route('edit_jd_sempro') }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            <input type="hidden" name="nama"
                                                                                value="{{ $mahasiswa->nama }}">
                                                                            <input type="hidden" name="nim"
                                                                                value="{{ $mahasiswa->nim }}">
                                                                            <button type="submit"
                                                                                class="btn btn-warning btn-sm"><i
                                                                                    class="bi bi-pencil-square"></i>&nbsp;&nbsp;</button>
                                                                        </form>
                                                                    </td>
                                                                    <td>
                                                                        <form action="{{ route('delete_jd_sempro') }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            <input type="hidden" name="nim"
                                                                                value="{{ $mahasiswa->nim }}">
                                                                            <button type="submit"
                                                                                class="btn btn-danger btn-sm"
                                                                                onclick="return confirm('Apakah Anda yakin ingin menghapus jadwal ini? Anda tidak akan dapat mengembalikan data yang telah dihapus.')"><i
                                                                                    class="bi bi-trash"></i>&nbsp;&nbsp;</button>
                                                                        </form>
                                                                    </td>
                                                                @endif
                                                            </tr>
                                                        </table>
                                                    </center>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                        @endforeach
                                    </tbody>
                                </table><br><br><br>
                            </div>
                            <div class="d-felx justify-content-center">
                                {{ $mahasiswas->links() }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
