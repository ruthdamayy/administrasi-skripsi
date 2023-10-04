@extends('mahasiswa/layout');

@section('title')
    <title>Mahasiswa - Seminar Proposal</title>
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
                        <p class="text-subtitle text-muted">Berkas administrasi sebelum melakukan seminar proposal</p>
                    </div>
                    {{-- <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/mahasiswa/dashboard">Mahasiswa</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Seminar Proposal</li>
                            </ol>
                        </nav>
                    </div> --}}
                </div>
            </div>

            <!-- submenu 1 -->
            <div class="row">
                <div class="col-8">
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible show fade">
                            <i class="bi bi-check-circle"></i> {{ session('status') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @elseif(session('prohibited'))
                        <div class="alert alert-danger alert-dismissible show fade">
                            <i class="bi bi-exclamation-triangle"></i> {{ session('prohibited') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <h5>1. Formulir Calon Pembimbing</h5>
                            <p class="text-right"> Formulir ini berisikan pengajuan calon pembimbing yang akan ditentukan
                                dalam rapat dosen berdasarkan bidang ilmu yang anda pilih.
                                Silahkan unduh formulir apabila data yang anda isikan melalui form telah sesuai.</p>
                            {{-- alert pemberitahuan --}}
                            @if (session('success_ilmu'))
                                <div class="alert alert-success alert-dismissible show fade">
                                    <i class="bi bi-check-circle"></i> {{ session('success_ilmu') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            <form action="{{ route('ajukan_bidang_ilmu') }}" method="GET">
                                @csrf
                                <input name="id" type="hidden" value="{{ Auth::user()->id }}">
                                <label for="bidang_ilmu1">Bidang Ilmu 1</label>
                                {{-- input bidang ilmu 1 --}}
                                <select name="bidang_ilmu1" id="bidang_ilmu1" class="form-select">
                                    <option value="0">Pilih bidang ilmu</option>
                                    @foreach ($bidang_ilmu as $bidang)
                                        <option value="{{ $bidang->id }}">{{ $bidang->bidang_ilmu }}</option>
                                    @endforeach
                                </select>
                                <br>
                                <label for="bidang_ilmu2">Bidang Ilmu 2</label>
                                <select name="bidang_ilmu2" id="bidang_ilmu2" class="form-select">
                                    <option value="0">Pilih bidang ilmu</option>
                                    @foreach ($bidang_ilmu as $bidang)
                                        <option value="{{ $bidang->id }}">{{ $bidang->bidang_ilmu }}</option>
                                    @endforeach
                                </select>
                                <br>
                                {{-- submit --}}
                                <button type="submit" class="btn btn-primary btn-sm"><i
                                        class="bi bi-envelope"></i>&nbsp;&nbsp;Daftar</button>
                            </form>
                            <div class="d-grid gap-2 d-md-flex justify-content">
                                <a href="/mahasiswa/calon_pembimbing/{{ Auth::user()->id }}" target="blank"
                                    class="btn btn-primary btn-sm"><i class="bi bi-printer-fill"></i> Unduh </a>
                            </div>
                            <hr>
                        </div>

                        <div class="card-body">
                            <h5>2. Pengajuan Executive Summary</h5>
                            <p class="text-right"> Mahasiswa yang telah melakukan bimbingan executive summary dengan dosen
                                pembimbing dan telah disetujui oleh dosen pembimbing dapat mengajukan executive summary
                                untuk diperiksa oleh kepala laboratorium.</p>
                            {{-- alert pemberitahuan --}}
                            @if (session('success_exum'))
                                <div class="alert alert-success alert-dismissible show fade">
                                    <i class="bi bi-check-circle"></i> {{ session('success_exum') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            {{-- alert success download file exum --}}
                            @if (session('success_download_exum'))
                                <div class="alert alert-success alert-dismissible show fade">
                                    <i class="bi bi-check-circle"></i> {{ session('success_download_exum') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <h6>Form Jurnal</h6>
                            <p> Berikut contoh jurnal yang dapat digunakan sebagai panduan. Silahkan unduh melalui
                                tombol unduh dibawah ini. </p>
                            @if ($mhs->no_statusAkses > 6)
                                <div class="d-grid gap-2 d-md-flex justify-content">
                                    <a href="/mahasiswa/format_jurnal" class="btn btn-primary btn-sm" target="blank">
                                        <i class="bi bi-download"></i> Unduh Jurnal
                                    </a>
                                </div>
                            @else
                                <div class="d-grid gap-2 d-md-flex justify-content">
                                    <a href="#" class="btn btn-primary btn-sm disabled">
                                        <i class="bi bi-download"></i> Unduh Jurnal
                                    </a>
                                </div>
                            @endif
                            <br>
                            {{-- input file exum --}}
                            @if ($exum_checker != 1)
                                <div class="alert alert-success alert-dismissible show fade">
                                    <i class="bi bi-check-circle"></i> Anda telah mengajukan executive summary
                                </div>
                            @elseif ($exum_checker == 0)
                                <form action="{{ route('ajukan_exum') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input name="id" type="hidden" value="{{ Auth::user()->id }}">
                                    <div class="mb-3">
                                        <label for="exum" class="form-label">File Executive Summary</label>
                                        <input class="form-control" type="file" id="exum" name="exum">
                                    </div>
                                    <br>
                                    {{-- submit --}}
                                    <button type="submit" class="btn btn-primary btn-sm"><i
                                            class="bi bi-envelope"></i>&nbsp;&nbsp;Daftar</button>
                                </form>
                            @endif

                            {{-- Status Exum --}}
                            <h5>Status Executive Summary</h5>
                            <p
                                class="text-right
                                            @if ($exum->status == 'Diterima') text-success
                                            @elseif($exum->status == 'Ditolak')
                                                text-danger
                                            @else
                                                text-warning @endif
                                            ">
                                {{ $exum->status }}
                            </p>
                            {{-- Unduh file exum --}}
                            <div
                                class="d-grid gap
                                            @if ($exum->status == 'Diterima') gap-2
                                            @elseif($exum->status == 'Ditolak')
                                                gap-2
                                            @else
                                                gap-2 @endif
                                            d-md-flex justify-content">
                                <a href="/mahasiswa/download_exum" target="blank" class="btn btn-primary btn-sm"><i
                                        class="bi bi-download"></i> Unduh Exum
                                </a>
                            </div>
                            {{-- <div class="d-grid gap-2 d-md-flex justify-content">
                                <a href="/mahasiswa/calon_pembimbing/{{ Auth::user()->id }}" target="blank"
                                    class="btn btn-primary btn-sm"><i class="bi bi-printer-fill"></i> Unduh </a>
                            </div> --}}
                            <hr>
                        </div>

                        <div class="card-body">
                            <!-- progress seminar proposal akan didapatkan melalui fitur ini -->
                            <h5>3. Form Pengajuan Judul </h5>
                            <p> Form ini merupakan form pengajuan judul yang akan diajukan oleh mahasiswa untuk dilakukan
                                uji kelayakan judul.</p>
                            {{-- alert pemberitahuan --}}

                            <form action="{{ route('daftar_judul') }}" method="GET">
                                @csrf
                                <input name="id" type="hidden" value="{{ Auth::user()->id }}">
                                {{-- check box --}}
                                <p class="text-left mb-1">Judul diajukan oleh: </p>
                                <div class="mt-1 mb-3">
                                    <input type="checkbox" id="dosen" name="dosen" required>
                                    <label for="dosen">Dosen</label> <br>
                                    <input type="checkbox" id="dosen" name="dosen" required>
                                    <label for="dosen">Mahasiswa</label>
                                </div>
                                {{-- radio uji kelayakan diterima atau ditolak --}}
                                {{-- <p class="text-left mb-1 mt-2">Uji kelayakan: </p>
                                <div class="mt-1">
                                    <input type="radio" id="diterima" name="status" required>
                                    <label for="diterima">Diterima</label> <br>
                                    <input type="radio" id="ditolak" name="status" required>
                                    <label for="ditolak">Ditolak</label>
                                </div> --}}

                                {{-- submit --}}
                                <button type="submit" class="btn btn-primary btn-sm"><i
                                        class="bi bi-envelope"></i>&nbsp;&nbsp;Daftar</button>
                            </form>
                            @if ($mhs->no_statusAkses > 0)
                                <div class="d-grid gap-2 d-md-flex justify-content">
                                    <a href="{{ '/mahasiswa/pengajuan_judul_skripsi' }}" target="blank"
                                        class="btn btn-primary btn-sm">
                                        <i class="bi bi-printer-fill"></i> Cetak</a>
                                </div>
                            @else
                                <div class="d-grid gap-2 d-md-flex justify-content">
                                    <a href="#"><button class="btn btn-primary btn-sm disabled">
                                            <i class="bi bi-printer-fill"></i> Cetak</button></a>
                                </div>
                            @endif

                            <hr><br>

                            <h5>4. Perbaikan Judul</h5>
                            <p> Mahasiswa yang telah disetujui oleh dosen pembimbing untuk mengajukan judul skripsi
                                dapat melakukan perbaikan judul skripsi. </p>
                            </p>
                            {{-- alert status berhasil perbaiki --}}
                            @if (session('success_edit_judul'))
                                <div class="alert alert-success alert-dismissible show fade">
                                    <i class="bi bi-check-circle"></i> {{ session('success_edit_judul') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            @if ($mhs->no_statusAkses > 0 && $skripsi_checker == 0)
                                <div class="d-grid gap-2 d-md-flex justify-content">
                                    <a href="{{ route('pendaftaran_judul') }}" target="blank"
                                        class="btn btn-success btn-sm">
                                        <i class="bi bi-plus-circle"></i> Daftarkan Judul
                                    </a>
                                </div>
                            @elseif($mhs->no_statusAkses > 0)
                                @if ($skripsi_checker > 0)
                                    <div class="alert alert-success alert-dismissible show fade">
                                        <i class="bi bi-check-circle"></i> Judul skripsi kamu sudah terdaftar di sistem
                                    </div>
                                    {{-- <p>Judul skripsi kamu sudah terdaftar di sistem.</p> --}}
                                    <div class="d-grid gap-2 d-md-flex justify-content">
                                        <form action="{{ route('perbaikan_judul') }}">
                                            <input type="hidden" name="nim" value="{{ $mhs->nim }}">
                                            @csrf
                                            <button type="submit" class="btn btn-success btn-sm">
                                                <i class="bi bi-pencil-square"></i> Edit Judul </button>
                                        </form>
                                    </div>
                                @else
                                    <div class="d-grid gap-2 d-md-flex justify-content">
                                        <a href="#"><button class="btn btn-success btn-sm disabled">
                                                <i class="bi bi-pencil-square"></i> Daftarkan Judul </button>
                                        </a>
                                    </div>
                                @endif
                            @endif
                            <hr><br>

                            <h5>5. Jadwal Seminar Proposal</h5>
                            <p> Jadwal seminar proposal akan ditentukan oleh Program Studi. Silahkan periksa jadwal seminar
                                proposal
                                Anda melalui <i>button</i> berikut. </p>
                            @if ($mhs->no_statusAkses > 1)
                                <div class="d-grid gap-2 d-md-flex justify-content">
                                    <!-- preview akan membawa mahasiswa ke halaman form yang ingin diunduh -->
                                    <a href="{{ '/mahasiswa/jadwal_sempro' }}"><button class="btn btn-success btn-sm"><i
                                                class="bi bi-eye"></i> Cek Jadwal</button></a>
                                </div>
                            @else
                                <div class="d-grid gap-2 d-md-flex justify-content">
                                    <!-- preview akan membawa mahasiswa ke halaman form yang ingin diunduh -->
                                    <a href="#"><button class="btn btn-primary btn-sm disabled"><i
                                                class="bi bi-eye"></i> Cek Jadwal</button></a>
                                </div>
                            @endif

                            <hr><br>
                            <h5>6. Lembar Kendali Bimbingan Skripsi Seminar Proposal</h5>
                            <p> Formulir ini Anda butuhkan sebelum seminar proposal untuk menjadi lembar kendali skripsi.
                                Data Anda terkait rencana judul skripsi, tanggal bimbingan serta catatan selama bimbingan
                                akan di-record menggunakan formulir ini.
                                Silahkan cetak formulir atau preview untuk memastikan data Anda sudah benar sebelum
                                mengunduh formulir. </p>
                            @if ($mhs->no_statusAkses > 0)
                                <div class="d-grid gap-2 d-md-flex justify-content">
                                    <!-- <a href="{{ '/mahasiswa/lembar_kendali_proposal' }}" target="blank" class="btn btn-primary btn-sm"> -->
                                    <a href="{{ route('mhs_lks') }}" target="blank" class="btn btn-primary btn-sm">
                                        <i class="bi bi-printer-fill"></i> Cetak
                                    </a>
                                </div>
                            @else
                                <div class="d-grid gap-2 d-md-flex justify-content">
                                    <a href="#"><button class="btn btn-success btn-sm disabled">
                                            <i class="bi bi-printer-fill"></i> Cetak </button>
                                    </a>
                                </div>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
            <!-- end submenu 1 -->

            <!-- submenu 2 -->
            {{-- <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">
                            <h3>02. Seminar Proposal</h4>
                        </div>

                    </div>
                </div>
            </div> --}}
            <!-- end submenu 2 -->
        </div>
    </div>
@endsection
