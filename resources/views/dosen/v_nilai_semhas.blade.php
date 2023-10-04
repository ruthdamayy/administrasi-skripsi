@extends('dosen/layout')

@section('title')
    <title>Dosen - Dashboard</title>
@endsection

@section('sidebar')
    <li class="sidebar-item ">
        <a href="dashboard" class='sidebar-link'>

            <span>Dashboard</span>
        </a>
    </li>

    <li class="sidebar-item ">
        <a href="{{ route('mhs_bimbingan') }}" class='sidebar-link'>
            <span>Mahasiswa Bimbingan</span>
        </a>
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
    <li class="sidebar-item has-sub ">
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
    <li class="sidebar-item has-sub">
        <a href="#" class='sidebar-link active'>
            <span>Input Nilai</span>
        </a>
        <ul class="submenu">
            <li class="submenu-item active">
                <a href="{{ route('v_nilai_uji_program') }}">Input Nilai Uji Program</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('v_nilai_semhas') }}">Input Nilai Seminar Hasil</a>
            </li>
            <li class="submenu-item ">
                <a href="{{ route('v_nilai_sidang') }}">Input Nilai Sidang Meja Hijau</a>
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
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Input Nilai Seminar Hasil</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
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
                            <!-- FORM PENDATAAN NILAI -->
                            <form class="form form-horizontal" action="{{ route('store_nilai_semhas') }}" method="POST">
                                @csrf
                                {{-- <input type="hidden" name="nim" value="{{ $data->nim }}"> --}}
                                <div class="form-body">
                                    <div class="row">
                                        <h3>Masukkan Nilai Seminar Hasil</h3>
                                        {{-- select pilihan nama mahasiswa from tabel mahasiswa --}}
                                        <div class="col-md-4">
                                            <label>Nama Mahasiswa</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <select class="form-control" name="nama_mhs" id="nama_mhs" required>
                                                <option value="">Pilih Mahasiswa</option>
                                                @foreach ($data as $mhs)
                                                    <option value="{{ $mhs->nim }}">{{ $mhs->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        {{-- <div class="col-md-4">
                                            <label>NIM</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" class="form-control" required value="{{ $data->nim }}"
                                                disabled>
                                        </div> --}}
                                        <div class="col-md-4">
                                            <label for="tanggal">Tanggal Penilaian</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="date"
                                                class="form-control @error('tanggal') is-invalid @enderror" id="tanggal"
                                                name="tanggal" required value="{{ old('tanggal') }}">
                                            @error('tanggal')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="waktu">Waktu</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="time" class="form-control @error('time') is-invalid @enderror"
                                                id="waktu" name="waktu" required value="{{ old('waktu') }}">
                                            @error('waktu')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <br><br><br><br>
                                        <h6>Silakan input nilai sesuai dengan urutan komponen berikut:</h6>
                                        <i class="text-sm text-muted">Semua kolom nilai Wajib Diisi</i><br>
                                    </div>
                                    <!-- NILAI DOSEN 1 -->
                                    {{-- <div class="row">
                                        <div class="col-md-12">
                                            <label for="nip">Dosen 1</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <select class="form-control  @error('nip') is-invalid @enderror" id="nip"
                                                name="nip" required value="{{ old('nip') }}" autocomplete="nip">
                                                <option value=""></option>
                                                <option value="{{ $data->nip_dosbing1 }}">Doping I -
                                                    {{ $data->nama_dosbing1 }}</option>
                                                <option value="{{ $data->nip_dosbing2 }}">Doping II -
                                                    {{ $data->nama_dosbing2 }}</option>
                                                <option value="{{ $data->nip_dosen_penguji1 }}">Pembanding I -
                                                    {{ $data->nama_dosen_penguji1 }}</option>
                                                <option value="{{ $data->nip_dosen_penguji2 }}">Pembanding II -
                                                    {{ $data->nama_dosen_penguji2 }}</option>
                                            </select>
                                            @error('nip')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div> <br><br>
                                    </div> --}}
                                    <div class="row">
                                        <div class="row">
                                            <p class="text-muted"> 1. Nilai 1: Abstrak (0-3)<br> </p>

                                            <div class="col-md-1">
                                                <label style="font-weight: bold" for="n1">Nilai 1</label>
                                            </div>
                                            <div class="col-md-2 form-group">
                                                <input type="number" id="n1"
                                                    class="form-control  @error('n1') is-invalid @enderror" name="n1"
                                                    autocomplete="n1">
                                                @error('n1')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <p class="text-muted">2. Nilai 2: Bab I: Pendahuluan (0-10) <br> </p>

                                            <div class="col-md-1">
                                                <label style="font-weight: bold" for="n2">Nilai 2</label>
                                            </div>
                                            <div class="col-md-2 form-group">
                                                <input type="number" id="n2"
                                                    class="form-control  @error('n2') is-invalid @enderror" name="n2"
                                                    autocomplete="n2">
                                                @error('n2')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <p class="text-muted"> 3. Nilai 3: Bab II: Landasan Teori (0-15) <br></p>

                                            <div class="col-md-1">
                                                <label style="font-weight: bold" for="n3">Nilai 3</label>
                                            </div>
                                            <div class="col-md-2 form-group">
                                                <input type="number" id="n3"
                                                    class="form-control  @error('n3') is-invalid @enderror" name="n3"
                                                    autocomplete="n3">
                                                @error('n3')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <p class="text-muted">4. Nilai 4: Bab III: Metodologi (0-25) <br> </p>

                                            <div class="col-md-1">
                                                <label style="font-weight: bold" for="n4">Nilai 4</label>
                                            </div>
                                            <div class="col-md-2 form-group">
                                                <input type="number" id="n4"
                                                    class="form-control  @error('n4') is-invalid @enderror" name="n4"
                                                    autocomplete="n4">
                                                @error('n4')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <p class="text-muted">5. Nilai 5: Bab IV: Implementasi (0-35)<br> </p>

                                            <div class="col-md-1">
                                                <label style="font-weight: bold" for="n5">Nilai 5</label>
                                            </div>
                                            <div class="col-md-2 form-group">
                                                <input type="number" id="n5"
                                                    class="form-control  @error('n5') is-invalid @enderror" name="n5"
                                                    autocomplete="n5">
                                                @error('n5')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <p class="text-muted">6. Nilai 6: Bab V: Kesimpulan (0-2)<br> </p>

                                            <div class="col-md-1">
                                                <label style="font-weight: bold" for="n6">Nilai 6</label>
                                            </div>
                                            <div class="col-md-2 form-group">
                                                <input type="number" id="n6"
                                                    class="form-control  @error('n6') is-invalid @enderror" name="n6"
                                                    autocomplete="n6">
                                                @error('n6')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <p class="text-muted"> 7. Nilai 7: Kemampuan mengemukakan substansi dan
                                                pendapat dan sikap
                                                (0-10) </p>
                                            <div class="col-md-1">
                                                <label style="font-weight: bold" for="n7">Nilai 7</label>
                                            </div>
                                            <div class="col-md-2 form-group">
                                                <input type="number" id="n7"
                                                    class="form-control  @error('n7') is-invalid @enderror" name="n7"
                                                    autocomplete="n7">
                                                @error('n7')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END NILAI DOSEN 1 -->
                                    <br>
                                    <button type="submit" class="btn btn-primary"><i
                                            class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
                                </div>
                            </form>
                            <!-- END FORM NILAI -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
