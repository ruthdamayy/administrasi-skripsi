@extends('dosen/layout')

@section('title')
    <title>Dosen - Jadwal Seminar/Sidang</title>
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
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Mahasiswa Tugas Akhir</h3>
                    <p class="text-subtitle text-muted">Data mahasiswa tugas akhir</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dosen/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Mahasiswa</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('assets/images/praMeHij.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title" align="center">Mahasiswa Aktif</h3></br>
                    <div class="d-grid gap-2 col-8 mx-auto">
                        <a href="/dosen/mahasiswaBimbingan"><button class="btn btn-primary btn-block">Access</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('assets/images/pascaMeHij.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title" align="center">Mahasiswa Lulus / Alumni</h3></br>
                    <div class="d-grid gap-2 col-8 mx-auto">
                        <a href="/dosen/mahasiswaLulus"><button class="btn btn-primary btn-block">Access</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
