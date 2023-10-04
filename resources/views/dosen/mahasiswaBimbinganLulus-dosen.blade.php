@extends('dosen.layout')

@section('title')
    <title>Dosen - Mahasiswa</title>
@endsection

@section('sidebar')
    <li class="sidebar-item ">
        <a href="dashboard" class='sidebar-link'>

            <span>Dashboard</span>
        </a>
    </li>

    <li class="sidebar-item has-sub active ">
        <a href="{{ route('mahasiswa_ta') }}" class='sidebar-link'>
            <i class="bi bi-people-fill"></i>
            <span>Mahasiswa</span>
        </a>
        <ul class="submenu">
            <li class="submenu-item ">
                <a href="{{ route('mhs_aktif') }}">Mahasiswa Aktif</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('lulus') }}">Lulus / Alumni</a>
            </li>
        </ul>
    </li>

    <li class="sidebar-item  ">
        <a href="jadwalSeminarSidang" class='sidebar-link'>
            <i class="bi bi-calendar-date"></i>
            <span>Jadwal Seminar/Sidang</span>
        </a>
    </li>
@endsection

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Mahasiswa Lulus / Alumni</h3>
                    <p class="text-subtitle text-muted">Data Mahasiswa Lulus </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="mahasiswaTA">Mahasiswa</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dosen</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- FORM UNTUK CARI DATA MAHASISWA -->
    <div class="row">
        <div class="col-xl-12">
            <form action="{{ route('search_mhs') }}">
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
    </div>
    <!-- END FORM CARI MAHASISWA -->
    <br>

    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class="table" id="table1">
                    <thead class="text-center">
                        <tr>
                            <th>Nama</th>
                            <th>Nim</th>
                            <th>Rincian Data</th>
                            <th>Lembar Kendali</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i; ?>
                        @for ($i = 0; $i <= count($mahasiswa) - 1; $i++)
                            <tr>
                                <td>
                                    <center>{{ $mahasiswa[$i]->nama_mhs }}</center>
                                </td>
                                <td>
                                    <center>{{ $mahasiswa[$i]->nim }}</center>
                                </td>
                                <td>
                                    <center>
                                        <a href="/dosen/detailMahasiswaBimbingan/{{ $mahasiswa[$i]->nim }}"><button
                                                type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal"><i
                                                    class="bi bi-eye"></i>&nbsp;Lihat</button></a>
                                    </center>
                                </td>
                                <td>
                                    <center>
                                        <a href="/dosen/lembar_kendali/{{ $mahasiswa[$i]->nim }}"><button type="button"
                                                class="btn btn-success btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal"><i
                                                    class="bi bi-printer-fill"></i>&nbsp;Cetak</button></a>
                                    </center>
                                </td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>

    </section>
@endsection
