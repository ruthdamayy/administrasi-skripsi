@extends('dosen/layout')

@section('title')
    <title>Dosen - SemHas</title>
@endsection

@section('sidebar')
    <li class="sidebar-item  ">
        <a href="dashboard" class='sidebar-link'>

            <span>Dashboard</span>
        </a>
    </li>

    <!-- <li
                class="sidebar-item  ">
                <a href="profile" class='sidebar-link'>
                    
                    <span>Profile</span>
                </a>
            </li> -->

    <li class="sidebar-item has-sub ">
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
        <a href="progresSkripsi" class='sidebar-link'>
            <i class="bi bi-graph-up"></i>
            <span>Progress Skripsi</span>
        </a>
    </li>

    <li class="sidebar-item ">
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="sidebar-link">
            @csrf
            <button class="btn" type="submit">
                <i class="bi bi-x-circle-fill"></i>
                <span>Logout</span>
            </button>
        </form>
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
                        <h3>Seminar Hasil</h3>
                        <p class="text-subtitle text-muted">Seminar Hasil</p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="mahasiswaBimbingan">Mahasiswa Bimbingan</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dosen</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <section class="section">
            <div class="card">
                <div class="card-body">
                    <table class="table" id="table1">
                        <thead>
                            <tr>
                                <th></th>
                                <th>
                                    <font size="2">Nama -Nim</font>
                                </th>
                                <th>
                                    <font size="2">Waktu - Tanggal Seminar</font>
                                </th>
                                <th>
                                    <font size="2">Persetujuan Semhas</font>
                                </th>
                                <th>
                                    <font size="2">Berita Acara</font>
                                </th>
                                <th>
                                    <font size="2">Penilaian</font>
                                </th>
                                <th>
                                    <font size="2">Penilaian Uji Program</font>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mahasiswa as $mhs)
                                <tr>
                                    <td><img src="{{ asset('assets/images/1.jpg') }}" width="40" alt="avatar"></td>
                                    <td>{{ $mhs->nama }} ( {{ $mhs->nim }})</td>
                                    <td>09.00 WIB - 24 Januari 2023</td>
                                    <td>
                                        <a href="/dosen/berkasSemhas1/{{ $mhs->nim }}"><button
                                                class="btn btn-primary btn-sm"><i
                                                    class="bi bi-printer-fill"></i>&nbsp;Cetak</button></a>
                                    </td>
                                    <td>
                                        <a href="/dosen/berkasSemhas2/{{ $mhs->nim }}"><button
                                                class="btn btn-primary btn-sm"><i
                                                    class="bi bi-printer-fill"></i>&nbsp;Cetak</button></a>
                                    </td>
                                    <td>
                                        <a href="#"><button class="btn btn-primary btn-sm"><i
                                                    class="bi bi-printer-fill"></i>&nbsp;Cetak</button></a>
                                    </td>
                                    <td>
                                        <a href="#"><button class="btn btn-primary btn-sm"><i
                                                    class="bi bi-printer-fill"></i>&nbsp;Cetak</button></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
        <!-- Basic Tables end -->
    </div>

    </div>
    </div>
@endsection
