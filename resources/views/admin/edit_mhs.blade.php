@extends('admin/layout')

@section('title')
    <title>Admin - Edit Mahasiswa</title>
@endsection

@section('sidebar')
    <li class="sidebar-item">
        <a href="/admin/dashboard" class='sidebar-link'>

            <span>Dashboard</span>
        </a>
    </li>

    <li class="sidebar-item has-sub">
        <a href="{{ route('mhs_ta') }}" class='sidebar-link'>
            <i class="bi bi-people-fill"></i>
            <span>Mahasiswa TA</span>
        </a>
        <ul class="submenu">
            <li class="submenu-item ">
                <a href="{{ route('aktif') }}">Mahasiswa Aktif</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('alumni') }}">Lulus / Alumni</a>
            </li>
        </ul>
    </li>

    <li class="sidebar-item has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-file-earmark-medical-fill"></i>
            <span>Pra Seminar Proposal</span>
        </a>
        <ul class="submenu">
            <li class="submenu-item ">
                <a href="{{ route('daftar_dosbing') }}">Dosen Pembimbing</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('daftar_skripsi') }}">Judul Skripsi</a>
            </li>
            <li class="submenu-item ">
                <a href="/admin/validasi_sempro">Berkas Administrasi</a>
            </li>
        </ul>
    </li>

    <li class="sidebar-item has-sub">
        <a href="{{ route('prasemhas_menu') }}" class='sidebar-link'>
            <i class="bi bi-file-earmark-medical-fill"></i>
            <span>Pra Seminar Hasil</span>
        </a>
        <ul class="submenu">
            <li class="submenu-item ">
                <a href="{{ route('daftar_dosenPenguji') }}">Dosen Penguji</a>
            </li>
            <li class="submenu-item ">
                <a href="/admin/validasi_semhas">Berkas Administrasi</a>
            </li>
        </ul>
    </li>

    <li class="sidebar-item">
        <a href="/admin/validasi_sidang" class='sidebar-link'>
            <i class="bi bi-file-earmark-medical-fill"></i>
            <span>Pra Sidang Meja Hijau</span>
        </a>
    </li>

    <li class="sidebar-item has-sub active">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-person-badge-fill"></i>
            <span>Manajemen User</span>
        </a>
        <ul class="submenu">
            <li class="submenu-item ">
                <a href="/admin/manajemen_admin">Admin</a>
            </li>
            <li class="submenu-item ">
                <a href="/admin/manajemen_prodi">Prodi</a>
            </li>
            <li class="submenu-item ">
                <a href="/admin/manajemen_dosen">Dosen</a>
            </li>
            <li class="submenu-item active">
                <a href="/admin/manajemen_mhs">Mahasiswa</a>
            </li>
        </ul>
    </li>

    <li class="sidebar-item has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-pen-fill"></i>
            <span>Penjadwalan</span>
        </a>
        <ul class="submenu">
            <li class="submenu-item ">
                <a href="{{ route('jadwal_sempro') }}">Seminar Proposal</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('jadwal_semhas') }}">Seminar Hasil</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('jadwal_sidang') }}">Sidang Meja Hijau</a>
            </li>
        </ul>
    </li>

    <li class="sidebar-item has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-clock-history"></i>
            <span>Riwayat Aktivitas</span>
        </a>
        <ul class="submenu">
            <li class="submenu-item ">
                <a href="{{ route('log_pendaftaran_dosbing') }}">Riwayat Pendaftaran Dosbing</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('log_pengubahan_dosbing') }}">Riwayat Pengubahan Dosbing</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('log_penghapusan_dosbing') }}">Riwayat Penghapusan Dosbing</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('log_pendaftaran_skripsi') }}">Riwayat Pendaftaran Judul Skripsi</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('log_pengubahan_skripsi') }}">Riwayat Pengubahan Skripsi</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('log_penghapusan_skripsi') }}">Riwayat Penghapusan Skripsi</a>
            </li>
        </ul>
    </li>

    <li class="sidebar-item">
        <a href="{{ route('profile_admin') }}" class='sidebar-link'>

            <span>Profil</span>
        </a>
    </li>

    <li class="sidebar-item has-sub ">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-clipboard-plus"></i>
            <span>Input Nilai</span>
        </a>
        <ul class="submenu">
            <li class="submenu-item ">
                <a href="{{ route('adm_nilai_IPK') }}">Input Nilai IPK</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('adm_nilai_uji_program') }}">Input Nilai Uji Program</a>
            </li>
            <li class="submenu-item ">
                <a href="#">Input Nilai Seminar Hasil</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('nilai_sidang_admin') }}">Input Nilai Sidang Meja Hijau</a>
            </li>
        </ul>
    </li>
@endsection

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Edit Data Mahasiswa</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin/mng_user">Manajemen User</a></li>
                            <li class="breadcrumb-item"><a href="/admin/manajemen_mhs">Mahasiswa</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Mahasiswa</li>
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
                            <br>
                            <!-- FORM UPDATE MHS -->
                            <form class="form form-horizontal" action="{{ route('update_mhs') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-6">
                                            <!-- DISPLAY FAULT PHOTO OR USER'S UPLOADED PHOTO -->
                                            <center>
                                                @if ($mhs->foto != null)
                                                    <img class="img-fluid" src="../main/photos/{{ $mhs->foto }}"
                                                        alt="Card image cap" style="width:200px;height:200px">
                                                @else
                                                    <img class="img-fluid" src="../main/assets/images/1.jpg"
                                                        alt="Card image cap" style="width:200px;height:200px">
                                                @endif
                                            </center>
                                            <!-- END OF PHOTO DISPLAY -->
                                            <br><br><br>
                                            <div class="row">
                                                @csrf
                                                <input type="hidden" name="old_nim" value="{{ $mhs->nim }}">
                                                <input type="hidden" name="old_foto" value="{{ $mhs->foto }}">
                                                <br><br>
                                                <div class="col-md-4">
                                                    @if ($mhs->foto != null)
                                                        <label for="foto">Ubah Foto Mahasiswa</label>
                                                    @else
                                                        <label for="foto">Tambahkan Foto Mahasiswa</label>
                                                    @endif
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input type="file" id="foto" class="form-control"
                                                        name="foto">
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="nama">Nama Lengkap</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input type="text" id="nama"
                                                        class="form-control @error('nama') is-invalid @enderror"
                                                        name="nama" value="{{ $mhs->nama }}">
                                                    @error('nama')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="new_nim">NIM</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input type="text" id="new_nim"
                                                        class="form-control @error('nim') is-invalid @enderror"
                                                        name="new_nim" value="{{ $mhs->nim }}">
                                                    @error('new_nim')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="angkatan">Angkatan</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input type="text" id="angkatan"
                                                        class="form-control @error('angkatan') is-invalid @enderror"
                                                        name="angkatan" value="{{ $mhs->angkatan }}">
                                                    @error('angkatan')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Jenis Kelamin</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <fieldset class="form-group">
                                                        <select class="form-select @error('sex') is-invalid @enderror"
                                                            id="basicSelect" name="sex">
                                                            @if ($mhs->jenis_kelamin == 'Laki-laki')
                                                                <option value="Laki-laki">Laki-laki</option>
                                                                <option value="Perempuan">Perempuan</option>
                                                            @else
                                                                <option value="Perempuan">Perempuan</option>
                                                                <option value="Laki-laki">Laki-laki</option>
                                                            @endif
                                                        </select>
                                                        @error('sex')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Status Mahasiswa</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <fieldset class="form-group">
                                                        <select class="form-select" id="basicSelect" name="status">
                                                            @if ($mhs->status == 'Aktif')
                                                                <option value="Aktif">Aktif</option>
                                                                <option value="Lulus">Lulus</option>
                                                                <option value="Drop out">Drop Out</option>
                                                            @elseif($mhs->status == 'Lulus')
                                                                <option value="Lulus">Lulus</option>
                                                                <option value="Aktif">Aktif</option>
                                                                <option value="Drop out">Drop Out</option>
                                                            @else
                                                                <option value="Drop out">Drop Out</option>
                                                                <option value="Aktif">Aktif</option>
                                                                <option value="Lulus">Lulus</option>
                                                            @endif
                                                        </select>
                                                    </fieldset><br>
                                                </div>
                                            </div>
                                            <div class="col=xl-8">
                                                <center><button type="submit" class="btn btn-primary"><i
                                                            class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button></center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- END OF FORM UPDATE MHS -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
