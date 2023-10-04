@extends('admin/layout')

@section('title')
    <title>Admin - Mahasiswa Lulus</title>
@endsection

@section('sidebar')
    <li class="sidebar-item">
        <a href="/admin/dashboard" class='sidebar-link'>

            <span>Dashboard</span>
        </a>
    </li>

    <li class="sidebar-item has-sub active">
        <a href="{{ route('mhs_ta') }}" class='sidebar-link'>
            <i class="bi bi-people-fill"></i>
            <span>Mahasiswa TA</span>
        </a>
        <ul class="submenu">
            <li class="submenu-item ">
                <a href="{{ route('aktif') }}">Mahasiswa Aktif</a>
            </li>
            <li class="submenu-item active">
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
                    <h3>Mahasiswa yang sudah lulus sidang / alumni </h3>
                </div>
                <div class="col-xl-4 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('mhs_ta') }}">Mahasiswa TA</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Lulus / Alumnus</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- FORM UNTUK CARI DATA MAHASISWA -->
        <div class="row">
            <div class="col-xl-12">
                <form action="{{ route('cari_alumni') }}">
                    @csrf
                    <table class="table">
                        <tr>
                            <td>
                                <input type="text" class="form-control" name="keyword"
                                    placeholder="Cari mahasiswa ...">
                            </td>
                            <td>
                                <button class="btn btn-primary" type="submit"><i class="b bi-search"></i> </button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <!-- END FORM CARI MAHASISWA -->

        <section id="basic-horizontal-layouts">
            <div class="row match-height">
                <div class="card card-outline-secondary">
                    <div class="row align-items-center m-5">
                        <div class="col-md mb-6">
                            <h5>Daftar Mahasiswa</h5></br>
                            <div class="table-responsive">
                                @if (session('status'))
                                    <div class="alert alert-success alert-dismissible show fade">
                                        <i class="bi bi-check-circle"></i> {{ session('status') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif
                                @if (session('prohibited'))
                                    <div class="alert alert-danger alert-dismissible show fade">
                                        <i class="bi bi-exclamation-triangle"></i> {{ session('prohibited') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif
                                <table class="table table-bordered mb-0">
                                    <thead class="text-center">
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama / NIM</th>
                                            <th>Judul Skripsi</th>
                                            <th>Bidang Ilmu</th>
                                            <th>Doping 1</th>
                                            <th>Doping 2</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-justify">
                                        <?php $i = 1; ?>
                                        @foreach ($alumnus as $alumni)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td class="text-bold-500">{{ $alumni->nama }} ({{ $alumni->nim }})</td>
                                                <td>{{ $alumni->judul_skripsi }}</td>
                                                <td>{{ $alumni->bidang_ilmu }}</td>
                                                <td>{{ $alumni->nama_dosbing1 }} ({{ $alumni->nip_dosbing1 }})</td>
                                                <td>{{ $alumni->nama_dosbing2 }} ({{ $alumni->nip_dosbing2 }})</td>
                                            </tr>
                                            <?php $i++; ?>
                                        @endforeach
                                    </tbody>
                                </table><br><br><br>
                            </div>
                            <div class="d-felx justify-content-center">
                                {{ $alumnus->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
