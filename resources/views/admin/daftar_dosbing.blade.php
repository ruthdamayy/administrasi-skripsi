@extends('admin/layout')

@section('title')
    <title>Admin - Pendaftaran Doping</title>
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

    <li class="sidebar-item has-sub active">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-file-earmark-medical-fill"></i>
            <span>Pra Seminar Proposal</span>
        </a>
        <ul class="submenu">
            <li class="submenu-item active">
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
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Pra Seminar Proposal</h3>
                    <p class="text-subtitle text-muted">Daftar Dosen Pembimbing</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin/page_pra_sempro">Pra Seminar Proposal</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Daftar Doping</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section id="basic-horizontal-layouts">
            <div class="row match-height">
                <div class="card card-outline-secondary">
                    <div class="row align-items-center m-5">
                        <div class="col-md mb-6">
                            <div class="table-responsive">
                                @if (session('status'))
                                    <div class="alert alert-success alert-dismissible show fade">
                                        <i class="bi bi-check-circle"></i> {{ session('status') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @elseif(session('prohibited'))
                                    <div class="alert alert-danger alert-dismissible show fade">
                                        <i class="bi bi-exclamation-triangle"></i> {{ session('prohibited') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif
                                <table class="table table-bordered mb-0">
                                    <thead class="text-center">
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama / NIM</th>
                                            <th>Nama / NIP Doping I</th>
                                            <th>Nama / NIP Doping II</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        @foreach ($mahasiswas as $mhs)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td class="text-bold-500">{{ $mhs->nama }} ({{ $mhs->nim }})</td>
                                                <td>
                                                    @if ($mhs->nip_dosbing1 != null)
                                                        {{ $mhs->nama_dosbing1 }} ({{ $mhs->nip_dosbing1 }})
                                                    @else
                                                        <p><i>Belum didaftarkan.</i></p>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($mhs->nip_dosbing2 != null)
                                                        {{ $mhs->nama_dosbing2 }} ({{ $mhs->nip_dosbing2 }})
                                                    @else
                                                        <p><i>Belum didaftarkan</i></p>
                                                    @endif
                                                </td>
                                                <td>
                                                    <center>
                                                        <table>
                                                            @if ($mhs->nip_dosbing1 != null && $mhs->nip_dosbing2 != null)
                                                                <tr>
                                                                    <td>
                                                                        <form action="{{ route('edit_dosbing') }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            <input type="hidden" name="nim"
                                                                                value="{{ $mhs->nim }}">
                                                                            <input type="hidden" name="nama"
                                                                                value="{{ $mhs->nama }}">
                                                                            <button type="submit"
                                                                                class="btn btn-warning btn-sm"><i
                                                                                    class="bi bi-pencil-square"></i></button>
                                                                        </form>
                                                                    </td>
                                                                    <td>
                                                                        <form action="{{ route('delete_dosbing') }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            <input type="hidden" name="nim"
                                                                                value="{{ $mhs->nim }}">
                                                                            <button type="submit"
                                                                                class="btn btn-danger btn-sm"
                                                                                onclick="return confirm('Yakin ingin menghapus? Anda tidak dapat mengembalikan data yang telah dihapus.')"><i
                                                                                    class="bi bi-trash"></i></button>
                                                                        </form>
                                                                    </td>
                                                                </tr>
                                                            @else
                                                                <tr>
                                                                    <td>
                                                                        <form action="{{ route('add_dosbing') }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            <input type="hidden" name="nim"
                                                                                value="{{ $mhs->nim }}">
                                                                            <input type="hidden" name="nama"
                                                                                value="{{ $mhs->nama }}">
                                                                            <button type="submit"
                                                                                class="btn btn-success btn-sm"><i
                                                                                    class="bi bi-plus-square"></i>
                                                                                Daftar</button>
                                                                        </form>
                                                                    </td>
                                                                </tr>
                                                            @endif
                                                        </table>
                                                    </center>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                        @endforeach
                                    </tbody>
                                </table><br><br><br>

                            </div>
                            <div class="d-felx justify-content-center">
                                {{ $mahasiswas->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
