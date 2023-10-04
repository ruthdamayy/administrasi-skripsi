@extends('mahasiswa/layout');

@section('title')
    <title>Mahasiswa - Perbaiki Judul Skripsi</title>
@endsection

@section('sidebar')
    <li class="sidebar-item">
        <a href="/mahasiswa/dashboard" class='sidebar-link'>

            <span>Dashboard</span>
        </a>
    </li>

    <li class="sidebar-item active">
        <a href="/mahasiswa/pra_seminar_proposal" class='sidebar-link'>

            <span>Seminar Proposal</span>
        </a>
    </li>

    <li class="sidebar-item  ">
        <a href="/mahasiswa/pra_semhas" class='sidebar-link'>

            <span>Seminar Hasil</span>
        </a>
    </li>

    <li class="sidebar-item  ">
        <a href="/mahasiswa/pra_sidang" class='sidebar-link'>

            <span>Sidang Meja Hijau</span>
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
                        <h3>Seminar Proposal</h3>
                        <p class="text-subtitle text-muted">Berkas administrasi seminar proposal</p>
                    </div>
                    {{-- <div class="col-12 col-md-6 order-md-3 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/mahasiswa/dashboard">Mahasiswa</a></li>
                                <li class="breadcrumb-item"><a href="/mahasiswa/pra_sempro">Seminar Proposal</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Judul</li>
                            </ol>
                        </nav>
                    </div> --}}
                </div>
            </div>

            <section id="basic-horizontal-layouts">
                <div class="row match-height">
                    <div class="card card-outline-secondary">
                        <div class="row align-items-center m-5">
                            <div class="col-md mb-5">
                                <!-- FORM EDIT JUDUL SKRIPSI -->
                                <form class="form form-horizontal" action="{{ route('store_new_judul') }}" method="POST">
                                    @csrf
                                    <input type="hidden" value="{{ $mahasiswa->judul_skripsi }}" name="old_judul">
                                    <input type="hidden" value="{{ $mahasiswa->eng_judul_skripsi }}" name="old_eng_judul">
                                    <input type="hidden" value="{{ $mahasiswa->bidang_ilmu }}" name="old_bidang_ilmu">
                                    <div class="form-body">
                                        <h5>Edit Judul Skripsi</h5> <br><br>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Nama</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" class="form-control" value="{{ $nama }}"
                                                    autocomplete="nama" disabled>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>NIM</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" class="form-control" value="{{ $mahasiswa->nim }}"
                                                    autocomplete="nim" disabled>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="new_judul_skripsi">Judul Skripsi</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" id="new_judul_skripsi"
                                                    class="form-control  @error('new_judul_skripsi') is-invalid @enderror"
                                                    value="{{ $mahasiswa->judul_skripsi }}" name="new_judul_skripsi"
                                                    autocomplete="new_judul_skripsi" autofocus>
                                                @error('new_judul_skripsi')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="new_eng_judul_skripsi">Judul Skripsi (English)</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" id="new_eng_judul_skripsi"
                                                    class="form-control  @error('new_eng_judul_skripsi') is-invalid @enderror"
                                                    value="{{ $mahasiswa->eng_judul_skripsi }}" name="new_eng_judul_skripsi"
                                                    autocomplete="new_eng_judul_skripsi" autofocus>
                                                @error('new_eng_judul_skripsi')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label for="bid_ilmu">Bidang Ilmu</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <select id="bid_ilmu"
                                                    class="form-control  @error('bid_ilmu') is-invalid @enderror"
                                                    name="bid_ilmu" required autocomplete="bid_ilmu" disabled>
                                                    <option value="{{ $mahasiswa->bidang_ilmu }}">
                                                        {{ $mahasiswa->bidang_ilmu }}</option>
                                                    @foreach ($bidang_ilmu as $bid)
                                                        <option value="{{ $bid->bidang_ilmu }}">{{ $bid->bidang_ilmu }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('bid_ilmu')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        {{-- <div class="row">
                                            <div class="col-md-4">
                                                <label for="new_dosen_pembimbing_1">Dosen Pembimbing 1</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <select name="new_dosen_pembimbing_1" id="new_dosen_pembimbing_1"
                                                    class="form-control @error('new_dosen_pembimbing_1') is-invalid @enderror">
                                                    <option value="">-- Pilih Dosen Pembimbing 1 --</option>
                                                    @foreach ($dosen as $d)
                                                        <option value="{{ $d->id }}"
                                                            {{ $d->id == $mahasiswa->dosen_pembimbing_1 ? 'selected' : '' }}>
                                                            {{ $d->nama }}</option>
                                                    @endforeach
                                                </select>
                                                @error('new_dosen_pembimbing_1')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="new_dosen_pembimbing_2">Dosen Pembimbing 2</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <select name="new_dosen_pembimbing_2" id="new_dosen_pembimbing_2"
                                                    class="form-control @error('new_dosen_pembimbing_2') is-invalid @enderror">
                                                    <option value="">-- Pilih Dosen Pembimbing 2 --</option>
                                                    @foreach ($dosen as $d)
                                                        <option value="{{ $d->id }}"
                                                            {{ $d->id == $mahasiswa->dosen_pembimbing_2 ? 'selected' : '' }}>
                                                            {{ $d->nama }}</option>
                                                    @endforeach
                                                </select>
                                                @error('new_dosen_pembimbing_2')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div> --}}
                                        {{-- <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" value="{{ $mahasiswa->nim }}"
                                                autocomplete="nim" disabled>
                                        </div> --}}
                                        {{-- <div class="row">
                                            
                                            </div>

                                        

                                        <div class="col-md-4">
                                            <label for="new_eng_judul_skripsi">Judul Skripsi Bahasa Inggris</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="new_eng_judul_skripsi"
                                                class="form-control  @error('new_eng_judul_skripsi') is-invalid @enderror"
                                                value="{{ $mahasiswa->eng_judul_skripsi }}" name="new_eng_judul_skripsi"
                                                autocomplete="new_eng_judul_skripsi">
                                            @error('new_eng_judul_skripsi')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div> --}}
                                        <div class="row mt-2">
                                            <div class="col-md-3">
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <button type="submit" class="btn btn-primary"><i
                                                        class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
                                            </div>
                                            {{-- <center>

                                            </center> --}}
                                        </div>
                                    </div>
                                </form>
                                <!-- END FORM EDIT -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
