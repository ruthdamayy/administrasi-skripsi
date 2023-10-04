@extends('prodi/layout')

@section('title')
    <title>Prodi - Daftar Jadwal Seminar Hasil</title>
@endsection

@section('sidebar')
    <li class="sidebar-item">
        <a href="/prodi/dashboard" class='sidebar-link'>

            <span>Dashboard</span>
        </a>
    </li>

    <li class="sidebar-item has-sub">
        <a href="/prodi/menu_mahasiswa" class='sidebar-link'>
            <i class="bi bi-people-fill"></i>
            <span>Mahasiswa TA</span>
        </a>
        <ul class="submenu">
            <li class="submenu-item ">
                <a href="/prodi/menu_mahasiswa/mahasiswa_aktif">Mahasiswa Aktif</a>
            </li>
            <li class="submenu-item ">
                <a href="/prodi/menu_mahasiswa/mahasiswa_alumni">Lulus / Alumni</a>
            </li>
        </ul>
    </li>

    <li class="sidebar-item ">
        <a href="/prodi/beritaacara" class='sidebar-link'>

            <span>Berita Acara</span>
        </a>
    </li>

    <li class="sidebar-item active">
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
<?php
use Carbon\Carbon;
$index = 1;
?>
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
                        <h3>Undangan dan Daftar Peserta Seminar Hasil</h3>
                        <p class="text-subtitle text-muted">Data Jadwal Seminar Hasil</p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/prodi/dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="/prodi/undangan_daftar_peserta">Undangan dan Daftar
                                        Peserta</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Undangan dan Daftar Peserta Seminar
                                    Hasil</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <section class="section">
            <?php $i; ?>
            @foreach ($tanggal as $dt)
                <div class="card">
                    <div class="card-body">
                        <h3>{{ Carbon::parse($dt->tanggal_semhas)->translatedFormat('l, d F Y') }}</h3>
                        <a href="/prodi/undangan_daftar_peserta/undangan_seminar_hasil/{{ $dt->tanggal_semhas }}"
                            target="blank"><button type="button" class="btn btn-success"><i
                                    class="bi bi-printer-fill"></i>&nbsp;Cetak Undangan</button></a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="/prodi/undangan_daftar_peserta/peserta_seminar_hasil/{{ $dt->tanggal_semhas }}"
                            target="blank"><button type="button" class="btn btn-success"><i
                                    class="bi bi-printer-fill"></i>&nbsp;Cetak Daftar Peserta</button></a>
                        <table class="table" id="table1">
                            <thead>
                                <tr>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Judul Skripsi</th>
                                    <th>Pembimbing I</th>
                                    <th>Pembimbing II</th>
                                    <th>Penguji I</th>
                                    <th>Penguji II</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($query as $mhs)
                                    @for ($i = 0; $i <= count($nim) - 1; $i += 2)
                                        @if ($nim[$i]->nim == $mhs->nim && $nim[$i]->tanggal_semhas == $dt->tanggal_semhas)
                                            <tr>
                                                <td>{{ $mhs->nim }}</td>
                                                <td>{{ $mhs->nama_mhs }}</td>
                                                <td>{{ $nim[$i]->judul_skripsi }}</td>
                                                <td>{{ $mhs->nama_dosbing1 }}</td>
                                                <td>{{ $mhs->nama_dosbing2 }}</td>
                                                <td>{{ $mhs->nama_dosen_penguji1 }}</td>
                                                <td>{{ $mhs->nama_dosen_penguji2 }}</td>
                                            </tr>
                                        @endif
                                    @endfor
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            @endforeach
        </section>
        <!-- Basic Tables end -->
    </div>

    </div>
    </div>
@endsection
