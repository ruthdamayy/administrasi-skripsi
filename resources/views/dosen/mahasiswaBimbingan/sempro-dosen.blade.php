@extends('dosen/layout')

@section('title')
    <title>Dosen - Sempro</title>
@endsection

@section('sidebar')
    <li class="sidebar-item ">
        <a href="dashboard" class='sidebar-link'>

            <span>Dashboard</span>
        </a>
    </li>

    <!-- <li
                    class="sidebar-item  ">
                    <a href="profile" class='sidebar-link'>
                        
                        <span>Profile</span>
                    </a>
                </li> -->

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
    <!-- <div id="main">
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
                                            <p class="text-subtitle text-muted">Berita Acara Seminar Proposal</p>
                                        </div>
                                        <div class="col-12 col-md-6 order-md-2 order-first">
                                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                                <ol class="breadcrumb">
                                                    <li class="breadcrumb-item"><a href="mahasiswaBimbingan">Mahasiswa Bimbingan</a></li>
                                                    <li class="breadcrumb-item active" aria-current="page">Dosen</li>
                                                </ol>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row row-cols-1 row-cols-md-4 g-4">
                                <div class="col">
                                  <div class="card h-100">
                                    <img src="{{ asset('assets/images/1.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">Felix Kurnia Salim</h5>
                                      <p class="card-text" style = "font-family:times;">
                                        Nim              : 201402..</br>
                                        Waktu            : 09.00 WIB</br>
                                        Tanggal          : 4 Maret 2023</br>
                                    </p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#"><button class="btn btn-primary btn-sm"><i class="bi bi-eye"></i>&nbsp;Lihat</button></a>
                                        <a href="#"><button class="btn btn-primary btn-sm"><i class="bi bi-printer-fill"></i>&nbsp;Cetak</button></a></br>
                                    </div>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="card h-100">
                                    <img src="{{ asset('assets/images/5.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">Monika Angelia Panjaitan</h5>
                                      <p class="card-text" style = "font-family:times;">
                                        Nim              : 201402010</br>
                                        Waktu            : 09.00 WIB</br>
                                        Tanggal          : 4 Maret 2023</br>
                                    </p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#"><button class="btn btn-primary btn-sm"><i class="bi bi-eye"></i>&nbsp;Lihat</button></a>
                                        <a href="#"><button class="btn btn-primary btn-sm"><i class="bi bi-printer-fill"></i>&nbsp;Cetak</button></a></br>
                                    </div>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="card h-100">
                                    <img src="{{ asset('assets/images/6.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">Putri Yanti Nahampun</h5>
                                      <p class="card-text" style = "font-family:times;">
                                        Nim              : 201402061</br>
                                        Waktu            : 09.00 WIB</br>
                                        Tanggal          : 5 Maret 2023</br>
                                    </p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#"><button class="btn btn-primary btn-sm"><i class="bi bi-eye"></i>&nbsp;Lihat</button></a>
                                        <a href="#"><button class="btn btn-primary btn-sm"><i class="bi bi-printer-fill"></i>&nbsp;Cetak</button></a></br>
                                    </div>
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="card h-100">
                                    <img src="{{ asset('assets/images/3.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">Pahwana Br Sinulingga</h5>
                                      <p class="card-text" style = "font-family:times;">
                                        Nim              : 201402013</br>
                                        Waktu            : 09.00 WIB</br>
                                        Tanggal          : 8 Maret 2023</br>
                                    </p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#"><button class="btn btn-primary btn-sm"><i class="bi bi-eye"></i>&nbsp;Lihat</button></a>
                                        <a href="#"><button class="btn btn-primary btn-sm"><i class="bi bi-printer-fill"></i>&nbsp;Cetak</button></a></br>
                                    </div>
                                  </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100">
                                      <img src="{{ asset('assets/images/5.jpg') }}" class="card-img-top" alt="...">
                                      <div class="card-body">
                                        <h5 class="card-title">Ruth Damayanthy Purba</h5>
                                        <p class="card-text" style = "font-family:times;">
                                          Nim              : 201402028</br>
                                          Waktu            : 09.00 WIB</br>
                                          Tanggal          : 9 Maret 2023</br>
                                      </p>
                                      </div>
                                      <div class="card-footer">
                                        <a href="#"><button class="btn btn-primary btn-sm"><i class="bi bi-eye"></i>&nbsp;Lihat</button></a>
                                        <a href="#"><button class="btn btn-primary btn-sm"><i class="bi bi-printer-fill"></i>&nbsp;Cetak</button></a></br>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col">
                                    <div class="card h-100">
                                      <img src="{{ asset('assets/images/3.jpg') }}" class="card-img-top" alt="...">
                                      <div class="card-body">
                                        <h5 class="card-title">Della Febriana</h5>
                                        <p class="card-text" style = "font-family:times;">
                                          Nim              : 201402151</br>
                                          Waktu            : 09.00 WIB</br>
                                          Tanggal          : 9 Maret 2023</br>
                                      </p>
                                      </div>
                                      <div class="card-footer">
                                        <a href="#"><button class="btn btn-primary btn-sm"><i class="bi bi-eye"></i>&nbsp;Lihat</button></a>
                                        <a href="#"><button class="btn btn-primary btn-sm"><i class="bi bi-printer-fill"></i>&nbsp;Cetak</button></a></br>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col">
                                    <div class="card h-100">
                                      <img src="{{ asset('assets/images/4.jpg') }}" class="card-img-top" alt="...">
                                      <div class="card-body">
                                        <h5 class="card-title">Reinaldhy Purba</h5>
                                        <p class="card-text" style = "font-family:times;">
                                          Nim              : 201402064</br>
                                          Waktu            : 09.00 WIB</br>
                                          Tanggal          : 13 Maret 2023</br>
                                      </p>
                                      </div>
                                      <div class="card-footer">
                                        <a href="#"><button class="btn btn-primary btn-sm"><i class="bi bi-eye"></i>&nbsp;Lihat</button></a>
                                        <a href="#"><button class="btn btn-primary btn-sm"><i class="bi bi-printer-fill"></i>&nbsp;Cetak</button></a></br>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                        </div> -->

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
                        <p class="text-subtitle text-muted">Seminar Proposal</p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="mahasiswaBimbingan">Mahasiswa Bimbingan</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dosen</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <section class="section">
            <div class="card">
                <div class="card-body">
                    <table class="table" id="table1">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Nama</th>
                                <th>Nim</th>
                                <th>Waktu - Tanggal Seminar</th>
                                <th>Berita Acara</th>
                                <th>Form Penilaian</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mahasiswa as $mhs)
                                <tr>
                                    <td><img src="{{ asset('assets/images/1.jpg') }}" width="40" alt="avatar">
                                    </td>
                                    <td>{{ $mhs->nama }}</td>
                                    <td>{{ $mhs->nim }}</td>
                                    <td>09.00 WIB - 24 Januari 2023</td>
                                    <td>
                                        <a href="/dosen/tampilMahasiswa/{{ $mhs->nim }}" target="_BLANK"><button
                                                class="btn btn-primary btn-sm"><i
                                                    class="bi bi-printer-fill"></i>&nbsp;Cetak</button></a>
                                    </td>
                                    <td>
                                        <a href="/dosen/tampilMahasiswa2/{{ $mhs->nim }}"><button
                                                class="btn btn-primary btn-sm"><i
                                                    class="bi bi-printer-fill"></i>&nbsp;Cetak</button></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
        <!-- Basic Tables end -->
    </div>

    </div>
    </div>
@endsection
