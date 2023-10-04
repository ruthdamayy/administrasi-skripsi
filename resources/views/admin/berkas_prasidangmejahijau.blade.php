@extends('admin/layout')

@section('title')
    <title>Admin - Pra Sidang Meja Hijau</title>
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
                    <h3>Berkas Administrasi Sidang</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin/validasi_sidang">Pra Sidang Meja Hijau</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-body">
                <h5>Daftar Peserta Sidang : </h5>
                <a href="/admin/cetakSidang"><button type="button" class="btn btn-primary btn-sm"
                        data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-printer"></i>&nbsp;Cetak
                        Undangan dan Peserta Sidang</button></a>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="card">
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible show fade">
                        <i class="bi bi-check-circle"></i> {{ session('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (session('prohibited'))
                    <div class="alert alert-danger alert-dismissible show fade">
                        <i class="bi bi-exclamation-triangle"></i> {{ session('prohibited') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <table class="table" id="table1">
                    <thead class="text-center">
                        <tr>
                            <th>Nama / NIM </th>
                            <th>Form Persetujuan</th>
                            <th>Berita Acara</th>
                            <th>Lembar Kendali</th>
                            <th>Kata Pengantar Sidang</th>
                            <th>Form Penilaian</th>
                            <th>Status Sidang</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i; ?>
                        @for ($i = 0; $i <= count($query) - 1; $i += 2)
                            <tr>
                                <td>{{ $query[$i]->nama }} ({{ $query[$i]->nim }})</td>
                                <td>
                                    <center>
                                        <a href="/admin/formPersetujuanSidang/{{ $query[$i]->nim }}"><button
                                                type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal"><i
                                                    class="bi bi-printer"></i>&nbsp;cetak</button></a>
                                    </center>
                                </td>
                                @if ($nilai[$i]->total_semhas != null)
                                    <td>
                                        <center>
                                            <a href="/admin/beritaAcaraSidang/{{ $query[$i]->nim }}"><button
                                                    type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i
                                                        class="bi bi-printer"></i>&nbsp;cetak</button></a>
                                        </center>
                                    </td>
                                @else
                                    <td>
                                        <center>
                                            <a href="/admin/beritaAcaraSidang/{{ $query[$i]->nim }}"><button
                                                    type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"><i
                                                        class="bi bi-printer"></i>&nbsp;cetak</button></a>
                                        </center>
                                    </td>
                                @endif
                                <td>
                                    <center>
                                        <a href="/admin/lembarKendaliSidang/{{ $query[$i]->nim }}"><button type="button"
                                                class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal"><i
                                                    class="bi bi-printer"></i>&nbsp;cetak</button></a>
                                    </center>
                                </td>
                                <td>
                                    <center>
                                        <a href="/admin/kataPengantarSidang/{{ $query[$i]->nim }}"><button type="button"
                                                class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal"><i
                                                    class="bi bi-printer"></i>&nbsp;cetak</button></a>
                                    </center>
                                </td>
                                <td>
                                    <center>
                                        <a href="/admin/formPenilaianSidang/{{ $query[$i]->nim }}"><button type="button"
                                                class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal"><i
                                                    class="bi bi-printer"></i>&nbsp;cetak</button></a>
                                    </center>
                                </td>
                                <td>
                                    @if ($query[$i]->no_statusAkses == 7)
                                        <p>Mahasiswa dinyatakan lulus.</p>
                                    @else
                                        <center>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <a href="/admin/approveSidang/{{ $query[$i]->nim }}"><button
                                                                type="button" class="btn btn-success btn-sm"
                                                                data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                                    class="bi bi-check-circle"></i>
                                                                &nbsp;Approve</button></a>
                                                    </td>
                                                    <td>
                                                        <a href="/admin/declineSidang/{{ $query[$i]->nim }}"><button
                                                                type="button" class="btn btn-danger btn-sm"
                                                                data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                                    class="bi bi-x-circle"></i> &nbsp; Decline</button></a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </center>
                                    @endif
                                </td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
