@extends('dosen.layout')

@section('title')
    <title>Dosen - Jadwal Seminar Hasil</title>
@endsection

@section('sidebar')
    <li class="sidebar-item    ">
        <a href="dashboard" class='sidebar-link'>

            <span>Dashboard</span>
        </a>
    </li>

    <li class="sidebar-item has-sub ">
        <a href="{{ route('mahasiswa_ta') }}" class='sidebar-link'>
            {{-- <i class="bi bi-people-fill"></i> --}}
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
    <li class="sidebar-item has-sub ">
        <a href="{{ route('mahasiswa_ta') }}" class='sidebar-link'>
            {{-- <i class="bi bi-people-fill"></i> --}}
            <span>Bimbingan</span>
        </a>
        <ul class="submenu">
            <li class="submenu-item ">
                <a href="{{ route('bimbingan_sempro') }}">Pra Seminar Proposal</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('bimbingan_semhas') }}">Pra Seminar Hasil</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('bimbingan_sidang') }}">Pra Sidang Meja Hijau</a>
            </li>
        </ul>
    </li>
    <li class="sidebar-item has-sub active">
        <a href="/jadwalSeminarSidang" class='sidebar-link'>
            {{-- <i class="bi bi-people-fill"></i> --}}
            <span>Jadwal</span>
        </a>
        <ul class="submenu">
            <li class="submenu-item ">
                <a href="/dosen/sempro">Seminar Proposal</a>
            </li>
            <li class="submenu-item ">
                <a href="/dosen/semhas">Seminar Hasil</a>
            </li>
            <li class="submenu-item ">
                <a href="/dosen/sidang">Sidang Meja Hijau</a>
            </li>
        </ul>
    </li>

    {{-- <li class="sidebar-item  ">
        <a href="jadwalSeminarSidang" class='sidebar-link'>
            <span>Jadwal Seminar/Sidang</span>
        </a>
    </li> --}}
    <li class="sidebar-item  ">
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="sidebar-link">
            @csrf
            <button class="btn btn-primary" type="submit"> Logout
                {{-- <span>Logout</span> --}}
            </button>
        </form>
    </li>
@endsection

@section('content')
    <?php use Carbon\Carbon; ?>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Jadwal Seminar Hasil</h3>
                    <p class="text-subtitle text-muted">Berikut jadwal seminar hasil yang akan Anda ikuti sebagai dosen
                        pembimbing</p>
                </div>
                {{-- <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="jadwalSeminarSidang">Jadwal Seminar/Sidang</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dosen</li>
                        </ol>
                    </nav>
                </div> --}}
            </div>
        </div>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>Judul Skripsi</th>
                            {{-- <th>Pembimbing I</th>
                            <th>Pembimbing I</th> --}}
                            <th>Hari/Tanggal</th>
                            <th>Pukul</th>
                            <th>Ruangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        @foreach ($query as $qr)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $qr->nama }}</td>
                                <td>{{ $qr->nim }}</td>
                                <td>{{ $qr->judul_skripsi }}</td>
                                {{-- <td>{{ $qr->nama_dosen }}</td> --}}
                                <td>{{ Carbon::parse($qr->tanggal_semhas)->translatedFormat('l , d F Y') }}</td>
                                <td>{{ Carbon::createFromFormat('H:i:s', $qr->waktu)->format('H:i') }} WIB</td>
                                <td>{{ $qr->tempat }}</td>
                            </tr>
                            <?php $i++; ?>
                        @endforeach
                        {{-- <?php $i = 1; ?>
                        @foreach ($query as $qr)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $qr->nama }}</td>
                                <td>{{ $qr->nim }}</td>
                                <td>{{ Carbon::createFromFormat('H:i:s', $qr->waktu)->format('H:i') }} WIB</td>
                                <td>{{ $qr->tempat }}</td>
                                <td>{{ Carbon::parse($qr->tanggal_sempro)->translatedFormat('l , d F Y') }}</td>
                            </tr>
                            <?php $i++; ?>
                        @endforeach --}}
                    </tbody>
                </table>
                {{-- <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nim</th>
                            <th>Waktu</th>
                            <th>Tempat</th>
                            <th>Jadwal Seminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        @foreach ($query as $qr)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $qr->nama }}</td>
                                <td>{{ $qr->nim }}</td>
                                <td>{{ Carbon::createFromFormat('H:i:s', $qr->waktu)->format('H:i') }} WIB</td>
                                <td>{{ $qr->tempat }}</td>
                                <td>{{ Carbon::parse($qr->tanggal_semhas)->translatedFormat('l , d F Y') }}</td>
                            </tr>
                            <?php $i++; ?>
                        @endforeach
                    </tbody>
                </table> --}}
            </div>
        </div>

    </section>
    <!-- Basic Tables end -->
    </div>

    </div>
    </div>
@endsection
