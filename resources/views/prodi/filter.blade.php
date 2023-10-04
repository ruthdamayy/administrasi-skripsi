@extends('prodi/layout')

@section('title')
    <title>Prodi - Mahasiswa Aktif</title>
@endsection

@section('sidebar')
    <li class="sidebar-item">
        <a href="/prodi/dashboard" class='sidebar-link'>

            <span>Dashboard</span>
        </a>
    </li>

    <li class="sidebar-item has-sub active">
        <a href="/prodi/menu_mahasiswa" class='sidebar-link'>
            <i class="bi bi-people-fill"></i>
            <span>Mahasiswa TA</span>
        </a>
        <ul class="submenu">
            <li class="submenu-item ">
                <a href="/prodi/menu_mahasiswa/mahasiswa_aktif">Mahasiswa Aktif</a>
            </li>
            <li class="submenu-item ">
                <a href="/prodi/menu_mahasiswa/mahasiswa_alumni">Lulus / Alumni</a>
            </li>
        </ul>
    </li>

    <li class="sidebar-item ">
        <a href="/prodi/beritaacara" class='sidebar-link'>

            <span>Berita Acara</span>
        </a>
    </li>

    <li class="sidebar-item  ">
        <a href="/prodi/undangan_daftar_peserta" class='sidebar-link'>

            <span>Undangan dan Daftar Peserta</span>
        </a>
    </li>
    <li class="sidebar-item has-sub ">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-clipboard-plus"></i>
            <span>Input Nilai</span>
        </a>
        <ul class="submenu">
            <li class="submenu-item ">
                <a href="{{ route('nilai_IPK') }}">Input Nilai IPK</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('nilai_uji_program') }}">Input Nilai Uji Program</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('nilai_semhas') }}">Input Nilai Seminar Hasil</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('nilai_sidang') }}">Input Nilai Sidang Meja Hijau</a>
            </li>
        </ul>
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
                        <h3>Mahasiswa Aktif</h3>
                        <p class="text-subtitle text-muted">Daftar mahasiswa-mahasiswa aktif tingkat akhir.</p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/prodi/menu_mahasiswa">Mahasiswa TA</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Mahasiswa Aktif</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- FORM UNTUK CARI DATA MAHASISWA -->
            <div class="row">
                <div class="col-xl-5">
                    <form action="/prodi/menu_mahasiswa/mahasiswa_aktif/search">
                        @csrf
                        <div class="row">
                            <div class="col-xl-11">
                                <input type="text" class="form-control" name="keyword"
                                    placeholder="Cari berdasarkan nama, nim, status skripsi, dsb...">
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
                    <form action="{{ route('filter_mhs_prodi') }}">
                        @csrf
                        <div class="row">
                            <div class="col-xl-11">
                                <select class="form-control  @error('angkatan') is-invalid @enderror" id="angkatan"
                                    name="angkatan" required placeholder="Filter berdasarkan angkatan ">
                                    <option value="">Filter berdasarkan tahun angkatan</option>
                                    @foreach ($angkatan as $akt)
                                        <option value="{{ $akt->angkatan }}">{{ $akt->angkatan }}</option>
                                    @endforeach
                                </select>
                                @error('angkatan')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
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

            <div class="row match-height">
                <div class="card card-outline-secondary">
                    <div class="row align-items-center m-5">
                        <div class="col-md mb-6">
                            <h5>Daftar Mahasiswa</h5><br>
                            <div class="table-responsive">
                                @if (session('status'))
                                    <div class="alert alert-success alert-dismissible show fade">
                                        <i class="bi bi-check-circle"></i> {{ session('status') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif
                                @if (session('prohibited'))
                                    <div class="alert alert-danger alert-dismissible show fade">
                                        <i class="bi bi-exclamation-triangle"></i> {{ session('prohibited') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif
                                <table class="table table-bordered mb-0 text-center">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>NIM</th>
                                            <th>Judul Skripsi</th>
                                            <th>Persentase</th>
                                            <th>Doping 1</th>
                                            <th>Doping 2</th>
                                            <th>Lembar Kendali</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        @foreach ($mahasiswas as $mahasiswa)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td class="text-bold-500">{{ $mahasiswa->nama_mhs }}</td>
                                                <td>{{ $mahasiswa->nim }}</td>
                                                <td>{{ $mahasiswa->judul_skripsi }}</td>
                                                <td>{{ $mahasiswa->persentase_skripsi }} %</td>
                                                <td>{{ $mahasiswa->nama_dosbing1 }}</td>
                                                <td>{{ $mahasiswa->nama_dosbing2 }}</td>
                                                <td>
                                                    <a href="/prodi/lembar_kendali/{{ $mahasiswa->nim }}"
                                                        class="btn btn-primary btn-sm"><i
                                                            class="bi bi-printer-fill"></i>&nbsp;Cetak</a>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                        @endforeach
                                    </tbody>
                                </table><br><br><br>
                            </div>

                            <nav aria-label="Page navigation example">
                                <ul class="pagination pagination-primary  justify-content-center">
                                    <li class="page-item">
                                        {{ $mahasiswas->links() }}
                                    </li>
                                </ul>
                            </nav>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    </div>
@endsection
