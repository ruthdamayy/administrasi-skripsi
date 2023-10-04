@extends('dosen.layout')

@section('title')
    <title>Dosen - Mahasiswa</title>
@endsection

@section('sidebar')
    <li class="sidebar-item active   ">
        <a href="dashboard" class='sidebar-link'>

            <span>Dashboard</span>
        </a>
    </li>

    <li class="sidebar-item has-sub ">
        <a href="{{ route('mahasiswa_ta') }}" class='sidebar-link'>
            {{-- <i class="bi bi-people-fill"></i> --}}
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
    <li class="sidebar-item has-sub ">
        <a href="{{ route('mahasiswa_ta') }}" class='sidebar-link'>
            {{-- <i class="bi bi-people-fill"></i> --}}
            <span>Bimbingan</span>
        </a>
        <ul class="submenu">
            <li class="submenu-item ">
                <a href="{{ route('bimbingan_sempro') }}">Pra Seminar Proposal</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('bimbingan_semhas') }}">Pra Seminar Hasil</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('bimbingan_sidang') }}">Pra Sidang Meja Hijau</a>
            </li>
        </ul>
    </li>
    <li class="sidebar-item has-sub ">
        <a href="/jadwalSeminarSidang" class='sidebar-link'>
            {{-- <i class="bi bi-people-fill"></i> --}}
            <span>Jadwal</span>
        </a>
        <ul class="submenu">
            <li class="submenu-item ">
                <a href="/dosen/sempro">Seminar Proposal</a>
            </li>
            <li class="submenu-item ">
                <a href="/dosen/semhas">Seminar Hasil</a>
            </li>
            <li class="submenu-item ">
                <a href="/dosen/sidang">Sidang Meja Hijau</a>
            </li>
        </ul>
    </li>

    {{-- <li class="sidebar-item  ">
        <a href="jadwalSeminarSidang" class='sidebar-link'>
            <span>Jadwal Seminar/Sidang</span>
        </a>
    </li> --}}
    <li class="sidebar-item  ">
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="sidebar-link">
            @csrf
            <button class="btn btn-primary" type="submit"> Logout
                {{-- <span>Logout</span> --}}
            </button>
        </form>
    </li>
@endsection

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-xl-8 col-md-6 order-md-1 order-last">
                    <h3>Mahasiswa Tugas Akhir</h3>
                    <br><br>
                </div>
                <div class="col-xl-4 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('mahasiswa_ta') }}">Mahasiswa</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Mahasiswa Aktif</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- FORM UNTUK CARI DATA MAHASISWA -->
            <div class="col-xl-5">
                <form action="{{ route('search_mhs_aktif') }}">
                    @csrf
                    <div class="row">
                        <div class="col-xl-11">
                            <input type="text" class="form-control" name="keyword"
                                placeholder="Cari berdasarkan nama, nim, angkatan, status skripsi, dsb...">
                        </div>
                        <div class="col-xl-1">
                            <button class="btn btn-primary" type="submit"><i class="b bi-search"></i> </button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END FORM CARI MAHASISWA -->


            <div class="col-xl-1"></div>

            <!-- FORM  FILTER -->
            <div class="col-xl-5">
                <form action="{{ route('filter') }}">
                    @csrf
                    <div class="row">
                        <div class="col-xl-11">
                            <select class="form-control " id="angkatan" name="angkatan" required>
                                <option value="">Cari berdasarkan tahun angkatan</option>
                                @foreach ($angkatan as $akt)
                                    <option value="{{ $akt->angkatan }}">{{ $akt->angkatan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xl-1">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-filter"></i> </button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END FORM FILTER -->

        </div>

        <br><br>

        <section id="basic-horizontal-layouts">
            <div class="row match-height">
                <div class="card card-outline-secondary">
                    <div class="row align-items-center m-5">
                        <div class="col-md mb-6">
                            <h5>Daftar Mahasiswa</h5>
                            <div class="table-responsive">
                                @if ($sum != 0)
                                    <p class="text-muted"><i>Hasil pencarian: {{ $sum }} data yang sesuai</i></p>
                                    <table class="table table-bordered mb-0 text-center">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Nim</th>
                                                <th>Persentase</th>
                                                <th>Keterangan</th>
                                                <th>Rincian Data</th>
                                                <th>Lembar Kendali</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($mahasiswa as $result)
                                                <tr>
                                                    <td class="text-bold-500">{{ $result->nama_mhs }}</td>
                                                    <td class="text-bold-500">{{ $result->nim }}</td>
                                                    <td class="text-bold-500">{{ $result->persentase_skripsi }}</td>
                                                    <td class="text-bold-500">{{ $result->keterangan }}</td>
                                                    <td>
                                                        <center>
                                                            <a href="/dosen/detailMahasiswaBimbingan/{{ $result->nim }}"><button
                                                                    type="button" class="btn btn-primary btn-sm"
                                                                    data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                                        class="bi bi-eye"></i>&nbsp;Lihat</button></a>
                                                        </center>
                                                    </td>
                                                    <td>
                                                        <center>
                                                            <a href="/dosen/lembar_kendali/{{ $result->nim }}"><button
                                                                    type="button" class="btn btn-success btn-sm"
                                                                    data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                                        class="bi bi-printer-fill"></i>&nbsp;Cetak</button></a>
                                                        </center>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <p class="text-muted"><i>Tidak ada hasil yang sesuai.</i></p>
                                @endif
                                <br>
                            </div>
                            <div class="d-felx justify-content-center">
                                <a href="{{ route('mhs_aktif') }}" class="btn btn-primary btn-sm"><i
                                        class="fa fa-arrow-left"></i>&nbsp;&nbsp;Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    @endsection
