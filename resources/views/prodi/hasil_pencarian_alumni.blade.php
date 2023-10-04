@extends('prodi/layout')

@section('title')
    <title>Prodi - Mahasiswa Alumni</title>
@endsection

@section('sidebar')
    <li class="sidebar-item">
        <a href="/prodi/dashboard" class='sidebar-link'>

            <span>Dashboard</span>
        </a>
    </li>

    <li class="sidebar-item has-sub active">
        <a href="/prodi/menu_mahasiswa" class='sidebar-link'>
            <i class="bi bi-people-fill"></i>
            <span>Mahasiswa TA</span>
        </a>
        <ul class="submenu">
            <li class="submenu-item ">
                <a href="/prodi/menu_mahasiswa/mahasiswa_aktif">Mahasiswa Aktif</a>
            </li>
            <li class="submenu-item ">
                <a href="/kaprodi/menu_mahasiswa/mahasiswa_alumni">Lulus / Alumni</a>
            </li>
        </ul>
    </li>

    <li class="sidebar-item ">
        <a href="/prodi/beritaacara" class='sidebar-link'>

            <span>Berita Acara</span>
        </a>
    </li>

    <li class="sidebar-item  ">
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
                        <h3>Mahasiswa Lulus</h3>
                        <p class="text-subtitle text-muted">Daftar mahasiswa-mahasiswa lulus (alumnus).</p>
                    </div>
                    <div class="col-xl-4 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/prodi/menu_mahasiswa">Mahasiswa TA</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Mahasiswa Lulus / Alumnus</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- FORM UNTUK CARI DATA MAHASISWA -->
            <div class="row">
                <form action="/prodi/menu_mahasiswa/mahasiswa_alumni/search">
                    @csrf
                    <table class="table">
                        <tr>
                            <td>
                                <input type="text" class="form-control" name="keyword" placeholder="Cari mahasiswa ...">
                            </td>
                            <td>
                                <button class="btn btn-primary" type="submit"><i class="b bi-search"></i> </button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <!-- END FORM CARI MAHASISWA -->

            <div class="row match-height">
                <div class="card card-outline-secondary">
                    <div class="row align-items-center m-5">
                        <div class="col-md mb-6">
                            <h5>Daftar Mahasiswa</h5>
                            <div class="table-responsive">
                                @if ($counter != 0)
                                    <p class="text-muted"><i>Hasil pencarian: {{ $counter }} data yang sesuai</i></p>
                                    <table class="table table-bordered mb-0 text-center">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama / NIM</th>
                                                <th>Judul Skripsi</th>
                                                <th>Bidang Ilmu</th>
                                                <th>Dosbing 1</th>
                                                <th>Dosbing 2</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            @foreach ($results as $result)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td class="text-bold-500">{{ $result->nama }} ({{ $result->nim }})</td>
                                                    <td>{{ $result->judul_skripsi }}</td>
                                                    <td>{{ $result->bidang_ilmu }}</td>
                                                    <td>{{ $result->nama_dosbing1 }} ({{ $result->nip_dosbing1 }})</td>
                                                    <td>{{ $result->nama_dosbing2 }} ({{ $result->nip_dosbing2 }})</td>
                                                </tr>
                                                <?php $i++; ?>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <p class="text-muted"><i>Tidak ada hasil yang sesuai.</i></p>
                                @endif
                                <br>
                            </div>
                            <div class="d-felx justify-content-center">
                                <a href="/prodi/menu_mahasiswa/mahasiswa_alumni" class="btn btn-primary btn-sm"><i
                                        class="fa fa-arrow-left"></i>&nbsp;&nbsp;Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    </div>
    </div>
    </div>
    </div>

@endsection
