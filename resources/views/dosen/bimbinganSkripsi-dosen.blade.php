@extends('dosen/layout')

@section('title')
    <title>Dosen - Mahasiswa</title>
@endsection

@section('sidebar')
    <li class="sidebar-item  ">
        <a href="dashboard" class='sidebar-link'>

            <span>Dashboard</span>
        </a>
    </li>

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
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Mahasiswa</h3>
                    <p class="text-subtitle text-muted">Berbagai data yang diperlukan</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="bimbinganSkripsi">Mahasiswa</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dosen</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('assets/images/pict9.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title" align="center">Mahasiswa Bimbingan</h3></br>
                        <div class="d-grid gap-2 col-8 mx-auto">
                            <a href="mahasiswaBimbingan"><button class="btn btn-primary btn-block">Access</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('assets/images/sidMejaHijau.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title" align="center">Mahasiswa yg diUji</h3></br>
                        <div class="d-grid gap-2 col-8 mx-auto">
                            <a href="mahasiswaUji"><button class="btn btn-primary btn-block">Access</button></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
