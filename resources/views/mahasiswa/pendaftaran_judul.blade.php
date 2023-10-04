@extends('mahasiswa/layout');

@section('title')
    <title>Mahasiswa - Pendaftaran Judul Skripsi</title>
@endsection

@section('sidebar')
    <li class="sidebar-item">
        <a href="/mahasiswa/dashboard" class='sidebar-link'>

            <span>Dashboard</span>
        </a>
    </li>

    <li class="sidebar-item active">
        <a href="/mahasiswa/pra_sempro" class='sidebar-link'>

            <span>Pra Seminar Proposal</span>
        </a>
    </li>

    <li class="sidebar-item  ">
        <a href="/mahasiswa/pra_semhas" class='sidebar-link'>

            <span>Pra Seminar Hasil</span>
        </a>
    </li>

    <li class="sidebar-item  ">
        <a href="/mahasiswa/pra_sidang" class='sidebar-link'>

            <span>Pra Sidang Meja Hijau</span>
        </a>
    </li>

    <li class="sidebar-item  ">
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
                        <h3>Pra Seminar Proposal</h3>
                        <p class="text-subtitle text-muted">Berkas administrasi pra seminar proposal</p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/mahasiswa/dashboard">Mahasiswa</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Pra Seminar Proposal</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <section id="basic-horizontal-layouts">
                <div class="row match-height">
                    <div class="card card-outline-secondary">
                        <div class="row align-items-center m-5">
                            <div class="col-md mb-5">
                                <!-- FORM PENDAFTARAM JUDUL SKRIPSI -->
                                <form class="form form-horizontal" action="{{ route('store_judul') }}" method="POST">
                                    @csrf
                                    <input type="hidden" value="{{ $mahasiswa->nim }}" name="nim">
                                    <div class="form-body">
                                        <div class="row">
                                            <h5>Daftar Judul Skripsi</h5> <br><br>
                                            <div class="col-md-4">
                                                <label>NIM</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" class="form-control" value="{{ $mahasiswa->nim }}"
                                                    autocomplete="nim" disabled>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="judul">Judul Skripsi</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" id="judul_skripsi"
                                                    class="form-control  @error('judul_skripsi') is-invalid @enderror"
                                                    value="{{ old('judul_skripsi') }}" name="judul_skripsi"
                                                    autocomplete="judul_skripsi">
                                                @error('judul_skripsi')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label for="eng_judul">Judul Skripsi Bahasa Inggris</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" id="eng_judul"
                                                    class="form-control  @error('eng_judul_skripsi') is-invalid @enderror"
                                                    value="{{ old('eng_judul_skripsi') }}" name="eng_judul_skripsi"
                                                    autocomplete="eng_judul_skripsi">
                                                @error('eng_judul_skripsi')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-md-4">
                                                <label for="bid_tulis">Bidang Ilmu</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <select class="form-control  @error('bid_tulis') is-invalid @enderror"
                                                    id="bid_tulis" required
                                                    class="form-control  @error('bid_tulis') is-invalid @enderror"
                                                    name="bid_tulis" autocomplete="bid_tulis">
                                                    <option value="">--Pilih Bidang Ilmu--</option>
                                                    @foreach ($bidang_ilmu as $bid)
                                                        <option value="{{ $bid->bidang_ilmu }}">{{ $bid->bidang_ilmu }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('bid_tulis')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <br>
                                            <center>
                                                <button type="submit" class="btn btn-primary"><i
                                                        class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
                                            </center>
                                        </div>
                                    </div>
                                </form>
                                <!-- END FORM REGISTERATION -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
