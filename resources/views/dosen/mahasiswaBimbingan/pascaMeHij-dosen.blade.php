@extends('dosen/layout')

@section('title')
    <title>Dosen - Sidang Meja Hijau</title>
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
                        <p class="text-subtitle text-muted"> Laporan Pasca Meja Hijau</p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="sidMejaHijau">Sidang Meja Hijau</a></li>
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
                                <th>Keterangan</th>
                                <th>File Skripsi</th>
                                <th>Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="{{ asset('assets/images/1.jpg') }}" width="40" alt="avatar"></td>
                                <td>Felix Kurnia Salim</td>
                                <td>Disetujui Membuat Paper</td>
                                <td><a href="#"><button class="btn btn-primary btn-sm"><i
                                                class="bi bi-printer-fill"></i>&nbsp;Unduh File</button></a></td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"><i
                                            class="bi bi-pencil-square"></i>&nbsp;Keputusan&nbsp;</button></a>
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Felix Kurnia Salim</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-6 col-12">
                                                            <button id="basic"
                                                                class="btn btn-outline-success btn-lg btn-block">Disetujui
                                                                Membuat Paper
                                                            </button>
                                                        </div>
                                                        <div class="col-md-6 col-12">
                                                            <button id="title"
                                                                class="btn btn-outline-danger btn-lg btn-block">Tidak
                                                                Disetujui Membuat Paper
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button"
                                                            class="btn btn-primary btn-sm">Simpan</button>
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                </div>
                </td>


                </tr>

                <tr>
                    <td><img src="{{ asset('assets/images/5.jpg') }}" width="40" alt="avatar"></td>
                    <td>Monika Angelia Panjaitan</td>
                    <td>Tidak Disetujui Membuat Paper</td>
                    <td><a href="#"><button class="btn btn-primary btn-sm "><i
                                    class="bi bi-printer-fill"></i>&nbsp;Unduh File</button></a></td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#exampleModal1"><i
                                class="bi bi-pencil-square"></i>&nbsp;Keputusan&nbsp;</button></a>

                        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Monika Angelia Panjaitan </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <button id="basic"
                                                    class="btn btn-outline-success btn-lg btn-block">Disetujui Membuat
                                                    Paper
                                                </button>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <button id="title"
                                                    class="btn btn-outline-danger btn-lg btn-block">Tidak Disetujui Membuat
                                                    Paper
                                                </button>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary btn-sm">Simpan</button>
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                    </td>
                </tr>

                <tr>
                    <td><img src="{{ asset('assets/images/6.jpg') }}" width="40" alt="avatar"></td>
                    <td>Putri Yanti Nahampun</td>
                    <td>Tidak Disetujui Membuat Paper</td>
                    <td><a href="#"><button class="btn btn-primary btn-sm "><i
                                    class="bi bi-printer-fill"></i>&nbsp;Unduh File</button></a></td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#exampleModal2"><i
                                class="bi bi-pencil-square"></i>&nbsp;Keputusan&nbsp;</button></a>

                        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Putri Yanti Nahampun</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <button id="basic"
                                                    class="btn btn-outline-success btn-lg btn-block">Disetujui Membuat
                                                    Paper
                                                </button>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <button id="title"
                                                    class="btn btn-outline-danger btn-lg btn-block">Tidak Disetujui Membuat
                                                    Paper
                                                </button>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary btn-sm">Simpan</button>
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                    </td>
                </tr>

                <tr>
                    <td><img src="{{ asset('assets/images/3.jpg') }}" width="40" alt="avatar"></td>
                    <td>Pahwana Br Sinulingga</td>
                    <td>Disetujui Membuat Paper</td>
                    <td><a href="#"><button class="btn btn-primary btn-sm "><i
                                    class="bi bi-printer-fill"></i>&nbsp;Unduh File</button></a></td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#exampleModal3"><i
                                class="bi bi-pencil-square"></i>&nbsp;Keputusan&nbsp;</button></a>

                        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Pahwana Br Sinulingga</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <button id="basic"
                                                    class="btn btn-outline-success btn-lg btn-block">Disetujui Membuat
                                                    Paper
                                                </button>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <button id="title"
                                                    class="btn btn-outline-danger btn-lg btn-block">Tidak Disetujui Membuat
                                                    Paper
                                                </button>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary btn-sm">Simpan</button>
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                    </td>
                </tr>

                <tr>
                    <td><img src="{{ asset('assets/images/5.jpg') }}" width="40" alt="avatar"></td>
                    <td>Ruth Damayanthy Purba</td>
                    <td>Tidak Disetujui Membuat Paper</td>
                    <td><a href="#"><button class="btn btn-primary btn-sm "><i
                                    class="bi bi-printer-fill"></i>&nbsp;Unduh File</button></a></td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#exampleModal4"><i
                                class="bi bi-pencil-square"></i>&nbsp;Keputusan&nbsp;</button></a>

                        <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Ruth Damayanthy Purba</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <button id="basic"
                                                    class="btn btn-outline-success btn-lg btn-block">Disetujui Membuat
                                                    Paper
                                                </button>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <button id="title"
                                                    class="btn btn-outline-danger btn-lg btn-block">Tidak Disetujui Membuat
                                                    Paper
                                                </button>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary btn-sm">Simpan</button>
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                    </td>
                </tr>

                <tr>
                    <td><img src="{{ asset('assets/images/3.jpg') }}" width="40" alt="avatar"></td>
                    <td>Della Febriana</td>
                    <td>Disetujui Membuat Paper</td>
                    <td><a href="#"><button class="btn btn-primary btn-sm "><i
                                    class="bi bi-printer-fill"></i>&nbsp;Unduh File</button></a></td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#exampleModal5"><i
                                class="bi bi-pencil-square"></i>&nbsp;Keputusan&nbsp;</button></a>

                        <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Della Febriana</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <button id="basic"
                                                    class="btn btn-outline-success btn-lg btn-block">Disetujui Membuat
                                                    Paper
                                                </button>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <button id="title"
                                                    class="btn btn-outline-danger btn-lg btn-block">Tidak Disetujui Membuat
                                                    Paper
                                                </button>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary btn-sm">Simpan</button>
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                    </td>
                </tr>

                <tr>
                    <td><img src="{{ asset('assets/images/4.jpg') }}" width="40" alt="avatar"></td>
                    <td>Reinaldhy Purba</td>
                    <td>Disetujui Membuat Paper</td>
                    <td><a href="#"><button class="btn btn-primary btn-sm "><i
                                    class="bi bi-printer-fill"></i>&nbsp;Unduh File</button></a></td>
                    <td>

                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#exampleModal6"><i
                                class="bi bi-pencil-square"></i>&nbsp;Keputusan&nbsp;</button></a>

                        <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Reinaldhy Purba</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <button id="basic"
                                                    class="btn btn-outline-success btn-lg btn-block">Disetujui Membuat
                                                    Paper
                                                </button>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <button id="title"
                                                    class="btn btn-outline-danger btn-lg btn-block">Tidak Disetujui Membuat
                                                    Paper
                                                </button>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary btn-sm">Simpan</button>
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                    </td>
                </tr>

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
