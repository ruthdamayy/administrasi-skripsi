@extends('mahasiswa/layout')

@section('title')
    <title>Mahasiswa - Pasca Meja Hijau</title>
@endsection

@section('sidebar')
    <li class="sidebar-item">
        <a href="/mahasiswa/dashboard" class='sidebar-link'>

            <span>Dashboard</span>
        </a>
    </li>

    <li class="sidebar-item">
        <a href="/mahasiswa/pra_sempro" class='sidebar-link'>

            <span>Pra Seminar Proposal</span>
        </a>
    </li>

    <li class="sidebar-item ">
        <a href="/mahasiswa/pra_semhas" class='sidebar-link'>

            <span>Pra Seminar Hasil</span>
        </a>
    </li>

    <li class="sidebar-item  ">
        <a href="/mahasiswa/pra_sidang" class='sidebar-link'>

            <span>Pra Sidang Meja Hijau</span>
        </a>
    </li>

    <li class="sidebar-item active">
        <a href="/mahasiswa/pasca_meja_hijau" class='sidebar-link'>

            <span>Pasca Sidang Meja Hijau</span>
        </a>
    </li>

    <li class="sidebar-item  ">
        <a href="{{ route('profile_mhs') }}" class='sidebar-link'>

            <span>Profil</span>
        </a>
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
                        <h3>Pasca Meja Hijau</h3>
                        <p class="text-subtitle text-muted">Form Penerbitan Jurnal</p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Pasca Meja Hijau</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Mahasiswa</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Basic Horizontal form layout section start -->
            <div class="row">
                <div class="col-8">
                    <section id="basic-horizontal-layouts">
                        <div class="row match-height">
                            <div class="card card-outline-secondary">
                                <div class="row align-items-center m-5">
                                    <div class="col-md mb-5">
                                        <div>
                                            <img class="mx-auto d-block" src="{{ asset('main/assets/images/paper.png') }}"
                                                align="center" width="120" height="110">
                                        </div> </br>
                                        <form class="form form-horizontal">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Nama Lengkap</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="nama" class="form-control"
                                                            name="fname">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>NIM</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="number" id="nim" class="form-control"
                                                            name="fnim">
                                                    </div>
                                                    <h5></br>Pembimbing</h5>
                                                    <div class="col-md-4">
                                                        </br><label>Pembimbing I</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        </br><input type="text" id="Bim1" class="form-control"
                                                            name="fbim1">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>NIP Pembimbing I</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="number" id="nip" class="form-control"
                                                            name="fnip">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Pembimbing II</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="Bim2" class="form-control"
                                                            name="fbim2">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>NIP Pembimbing II</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="number" id="nip" class="form-control"
                                                            name="fnip">
                                                    </div>
                                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                        <a href="cetakSempro-mahasiswa.html"><button
                                                                class="btn btn-primary btn-sm"><i
                                                                    class="bi bi-printer-fill"></i>&nbsp;print</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        @endsection
