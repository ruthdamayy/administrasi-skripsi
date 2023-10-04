@extends('admin/layout')

@section('title')
    <title>Admin - Mahasiswa Tingkat Akhir</title>
@endsection

@section('sidebar')
    <li class="sidebar-item">
        <a href="/admin/dashboard" class='sidebar-link'>

            <span>Dashboard</span>
        </a>
    </li>

    <li class="sidebar-item has-sub active">
        <a href="{{ route('mhs_ta') }}" class='sidebar-link'>
            <i class="bi bi-people-fill"></i>
            <span>Mahasiswa TA</span>
        </a>
        <ul class="submenu">
            <li class="submenu-item active">
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

    <li class="sidebar-item has-sub">
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
            <li class="submenu-item ">
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
                <a href="{{ route('adm_nilai_semhas') }}">Input Nilai Seminar Hasil</a>
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
                <div class="col-xl-8 col-md-6 order-md-1 order-last">
                    <h3>Hasil Pencarian</h3><br>
                    <br>
                </div>
                <div class="col-xl-4 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('mhs_ta') }}">Mahasiswa TA</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Mahasiswa Aktif</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- FORM UNTUK CARI DATA MAHASISWA -->
            <div class="col-xl-5">
                <form action="{{ route('cari_mhs') }}">
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
                <form action="{{ route('filter_mhs') }}">
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
        <!-- DAFTAR MAHASISWA -->
        <p class="text-muted"><i>Menampilkan {{ $counter }} data yang sesuai.</i></p>
        <div class="row">
            @foreach ($mahasiswas as $mahasiswa)
                <div class="col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-body py-4 px-5">
                            <div class="d-flex align-items-top">
                                <div class="avatar avatar-xl">
                                    @if ($mahasiswa->foto != null)
                                        <img src="../main/photos/{{ $mahasiswa->foto }}" alt="Face 1">
                                    @else
                                        <img src="../main/photos/graduate_student.png" alt="Face 1">
                                    @endif
                                </div>
                                <div class="ms-3 name">
                                    <h5 class="font-bold">{{ $mahasiswa->nama_mhs }}</h5>
                                    <h6 class="text-muted mb-0"> {{ $mahasiswa->nim }}</h6>
                                    <br>
                                    <div class="progress progress-primary  mb-4">
                                        <div class="progress-bar progress-label" role="progressbar"
                                            style="width: {{ $mahasiswa->persentase_skripsi }}%"
                                            aria-valuenow="{{ $mahasiswa->persentase_skripsi }}" aria-valuemin="0"
                                            aria-valuemax="100">
                                        </div>
                                    </div>
                                    <h6 class="text-muted mb-0"> {{ $mahasiswa->keterangan }}</h6>
                                    <p class="text-muted text-sm">
                                    <table class="table mb-0">
                                        <tr>
                                            <td>Angkatan</td>
                                            <td>:</td>
                                            <td>{{ $mahasiswa->angkatan }}</td>
                                        </tr>
                                        <tr>
                                            <td>Judul</td>
                                            <td>:</td>
                                            <td>{{ $mahasiswa->judul_skripsi }}</td>
                                        </tr>
                                        <tr>
                                            <td>Doping I</td>
                                            <td>:</td>
                                            <td>{{ $mahasiswa->nama_dosbing1 }}</td>
                                        </tr>
                                        <tr>
                                            <td>Doping II</td>
                                            <td>:</td>
                                            <td>{{ $mahasiswa->nama_dosbing2 }}</td>
                                        </tr>
                                    </table>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <a href="{{ route('aktif') }}"> Kembali </a>
        <!-- END OF DAFTAR MAHASISWA -->

        <!-- PAGINATION -->
        <div class="d-felx justify-content-center">
            {{ $mahasiswas->links() }}
        </div>
        <!-- END OF PAGINATION -->
    </div>
@endsection
