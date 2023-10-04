@extends('dosen/layout')

@section('title')
    <title>Dosen - Profile</title>
@endsection

@section('sidebar')
    <li class="sidebar-item">
        <a href="dashboard" class='sidebar-link'>

            <span>Dashboard</span>
        </a>
    </li>

    <li class="sidebar-item active ">
        <a href="profile" class='sidebar-link'>

            <span>Profile</span>
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
                        <h3>Profile</h3>
                        <p class="text-subtitle text-muted">This is your profile</p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="profile">Profile</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dosen</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Basic Horizontal form layout section start -->
            <section id="basic-horizontal-layouts">
                <div class="row match-height">
                    <div class="card card-outline-secondary">
                        <div class="row align-items-center m-5">
                            <div class="col-md mb-5">
                                <!-- <h4 class="card-title">Horizontal Form</h4> -->
                                <form class="form form-horizontal">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Nama Lengkap</label>
                                            </div>
                                            <div class="col-md-7 form-group">
                                                <input type="text" id="nama" class="form-control" name="fname"
                                                    value="">
                                            </div>
                                            <div class="col-md-4">
                                                <label>NIP</label>
                                            </div>
                                            <div class="col-md-7 form-group">
                                                <input type="number" id="nim" class="form-control" name="fnim">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Jenis Kelamin</label>
                                            </div>
                                            <div class="col-md-7 form-group">
                                                <input type="text" id="jenis-kelamin" class="form-control"
                                                    name="fjenis-kelamin">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Program Studi</label>
                                            </div>
                                            <div class="col-md-7 form-group">
                                                <input type="text" id="prodi" class="form-control" name="fprodi">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Fakultas</label>
                                            </div>
                                            <div class="col-md-7 form-group">
                                                <input type="text" id="fakultas" class="form-control" name="ffakultas">

                                            </div>
                                        </div>
                                        <!-- <li>
                                                <div class="icon dripicons-cloud-download"></div>
                                                <input type="text" readonly="readonly" value="cloud-download">
                                            </li>
                                            <li>
                                                <div class="icon dripicons-download"></div>
                                                <input type="text" readonly="readonly" value="download">
                                            </li> -->
                                    </div>
                                </form>

                            </div>
                            <div class="col-md-auto">
                                <img style="height: 10rem" src="{{ asset('assets/images/dosenprofile.png') }}"
                                    width="150" height="250">
                            </div>
                            <!-- <div class="d-grid gap-2 d-md-flex justify-content-between">
                                    <a href="#"><button class="btn btn-primary btn-sm"><i class="bi bi-save"></i>&nbsp;&nbsp;&nbsp;Save</button></a>
                                </div> -->
                        </div>
                    </div>
                </div>

        </div>
    </div>
@endsection
