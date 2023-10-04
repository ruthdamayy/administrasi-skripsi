<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\User;
use App\Models\Dosen;
use App\Models\Skripsi;
use App\Models\Mahasiswa;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\BimbinganSemhas;
use App\Models\BimbinganSempro;
use App\Models\BimbinganSidang;
use App\Models\DosenPembimbing;
use App\Models\NilaiUjiProgram;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DosenController extends Controller
{

    public $nim;

    public function v_nilai_uji_program()
    {
        $mahasiswa = DB::table('mahasiswas')
            ->join('dosen_pembimbings', 'mahasiswas.nim', '=', 'dosen_pembimbings.nim')
            ->select('mahasiswas.nim', 'mahasiswas.nama')
            ->where('dosen_pembimbings.nip_dosbing1', '=', Auth::user()->username)
            ->get();
        return view('dosen/v_nilai_uji_program', compact('mahasiswa'));
    }
    public function v_nilai_semhas()
    {
        $data = DB::table('mahasiswas as m')
            ->leftJoin('v_dosen_penguji as v', 'm.nim', '=', 'v.nim')
            ->leftjoin('v_dosbing as f', 'm.nim', '=', 'f.nim')
            ->select('m.nim', 'm.nama', 'f.nip_dosbing1', 'f.nama_dosbing1', 'f.nip_dosbing2', 'f.nama_dosbing2', 'v.nip_dosen_penguji1', 'v.nama_dosen_penguji1', 'v.nip_dosen_penguji2', 'v.nama_dosen_penguji2')
            ->where('f.nip_dosbing1', '=', Auth::user()->username)
            ->orWhere('f.nip_dosbing2', '=', Auth::user()->username)
            ->get();
        // dd($data);
        return view('dosen/v_nilai_semhas', compact('data'));
    }
    public function v_nilai_sidang(Request $request)
    {
        return 'v_nilai_sidang';
    }

    public function store_nilai_uji_program(Request $request)
    {
        // $request->validate([
        //     'nim' => 'required',
        //     'nilai' => 'required',
        // ]);
        $n                                  = new NilaiUjiProgram;
        $n->nim                             = $request->nim;
        $n->nip                             = Auth::user()->username;
        if ($request->n1 != NULL) {
            $n->nilai_kemampuan_dasar_program   = floatval($request->n1);
        }
        if ($request->n2 != NULL) {
            $n->nilai_kecocokan_algoritma       = floatval($request->n2);
        }
        if ($request->n3 != NULL) {
            $n->nilai_penguasaan_program        = floatval($request->n3);
        }
        if ($request->n4 != NULL) {
            $n->nilai_penguasaan_ui             = floatval($request->n4);
        }
        if ($request->n5 != NULL) {
            $n->nilai_validasi_output           = floatval($request->n5);
        }

        $n->total                           = floatval($request->n6);

        $n->tanggal                         = $request->tanggal;
        $n->waktu                           = $request->waktu;
        $n->save();

        if ($n) {
            return redirect()->route('v_nilai_uji_program')->with('success_nilai_uji_program', 'Nilai Uji Program Berhasil Ditambahkan');
        } else {
            return redirect()->route('v_nilai_uji_program')->with('error_nilai_uji_program', 'Nilai Uji Program Gagal Ditambahkan');
        }
    }



    public function mhs_bimbingan()
    {
        $nip = Dosen::where('id_user', Auth::user()->id)->select('nip')->first();
        $nim = DB::table('dosen_pembimbings')
            ->select('nim')
            ->where('nip_dosbing1', '=', $nip->nip)
            ->orWhere('nip_dosbing2', '=', $nip->nip)
            ->get();
        // Ubah nim ke string array
        $nim = json_decode($nim, true);
        $nim = array_column($nim, 'nim');
        // dd($nim);
        // keterangan -> v_progress_skripsi
        // nama_mhs -> v_mhs_bimbingan
        $mahasiswa = DB::table('v_dosbing as d')
            ->join('v_progress_skripsi as p', 'd.nim', '=', 'p.nim')
            ->select('d.nim', 'd.nama_mhs', 'p.keterangan')
            ->whereIn('d.nim', $nim)
            ->get();

        return view('dosen/mhs_bimbingan', compact('mahasiswa'));
    }

    public function bimbingan_sempro()
    {
        $mahasiswa = DB::table('mahasiswas')
            ->join('dosen_pembimbings', 'mahasiswas.nim', '=', 'dosen_pembimbings.nim')
            ->select('mahasiswas.nim', 'mahasiswas.nama')
            ->where('dosen_pembimbings.nip_dosbing1', '=', Auth::user()->username)
            ->get();
        return view('dosen.bimbingan_sempro', compact('mahasiswa'));
    }

    public function simpan_bimbingan_sempro(Request $request)
    {

        // $request->validate([
        //     'nim' => 'required',
        //     'tanggal' => 'required',
        //     'jam' => 'required',
        //     'tempat' => 'required',
        //     'topik' => 'required',
        //     'catatan' => 'required',
        // ]);
        // nim 	nip 	tgl_penyerahan 	tgl_selesai_periksa 	tgl_kembali 	catatan
        $bimbingan_sempro = new BimbinganSempro;
        $bimbingan_sempro->nim = $request->nim;
        $bimbingan_sempro->nip = Auth::user()->username;
        $bimbingan_sempro->tgl_penyerahan = $request->tanggalPenyerahan;
        $bimbingan_sempro->tgl_selesai_periksa = $request->tanggalSelesaiDiperiksa;
        $bimbingan_sempro->tgl_kembali = $request->tanggalDiterimaKembali;
        $bimbingan_sempro->catatan = $request->catatan;
        $bimbingan_sempro->save();

        if ($bimbingan_sempro) {
            return redirect()->route('bimbingan_sempro')->with('success_bimbingan_sempro', 'Data Bimbingan Seminar Proposal Berhasil Ditambahkan');
        } else {
            return redirect()->route('bimbingan_sempro')->with('error_bimbingan_sempro', 'Data Bimbingan Seminar Proposal Gagal Ditambahkan');
        }
    }


    public function bimbingan_semhas()
    {
        $mahasiswa = DB::table('mahasiswas')
            ->join('dosen_pembimbings', 'mahasiswas.nim', '=', 'dosen_pembimbings.nim')
            ->select('mahasiswas.nim', 'mahasiswas.nama')
            ->where('dosen_pembimbings.nip_dosbing1', '=', Auth::user()->username)
            ->get();
        return view('dosen.bimbingan_semhas', compact('mahasiswa'));
    }

    public function simpan_bimbingan_semhas(Request $request)
    {
        $bimbingan_semhas = new BimbinganSemhas;
        $bimbingan_semhas->nim = $request->nim;
        $bimbingan_semhas->nip = Auth::user()->username;
        $bimbingan_semhas->tgl_penyerahan = $request->tanggalPenyerahan;
        $bimbingan_semhas->tgl_selesai_periksa = $request->tanggalSelesaiDiperiksa;
        $bimbingan_semhas->tgl_kembali = $request->tanggalDiterimaKembali;
        $bimbingan_semhas->catatan = $request->catatan;
        $bimbingan_semhas->save();

        if ($bimbingan_semhas) {
            return redirect()->route('bimbingan_semhas')->with('success_bimbingan_semhas', 'Data Bimbingan Seminar Hasil Berhasil Ditambahkan');
        } else {
            return redirect()->route('bimbingan_semhas')->with('error_bimbingan_semhas', 'Data Bimbingan Seminar Hasil Gagal Ditambahkan');
        }
    }


    public function bimbingan_sidang()
    {
        $mahasiswa = DB::table('mahasiswas')
            ->join('dosen_pembimbings', 'mahasiswas.nim', '=', 'dosen_pembimbings.nim')
            ->select('mahasiswas.nim', 'mahasiswas.nama')
            ->where('dosen_pembimbings.nip_dosbing1', '=', Auth::user()->username)
            ->get();
        return view('dosen.bimbingan_sidang', compact('mahasiswa'));
    }

    public function simpan_bimbingan_sidang(Request $request)
    {
        $bimbingan_sidang = new BimbinganSidang;
        $bimbingan_sidang->nim = $request->nim;
        $bimbingan_sidang->nip = Auth::user()->username;
        $bimbingan_sidang->tgl_penyerahan = $request->tanggalPenyerahan;
        $bimbingan_sidang->tgl_selesai_periksa = $request->tanggalSelesaiDiperiksa;
        $bimbingan_sidang->tgl_kembali = $request->tanggalDiterimaKembali;
        $bimbingan_sidang->catatan = $request->catatan;
        $bimbingan_sidang->save();

        if ($bimbingan_sidang) {
            return redirect()->route('bimbingan_sidang')->with('success_bimbingan_sidang', 'Data Bimbingan Sidang Berhasil Ditambahkan');
        } else {
            return redirect()->route('bimbingan_sidang')->with('error_bimbingan_sidang', 'Data Bimbingan Sidang Gagal Ditambahkan');
        }
    }

    public function berkasBeritaAcara($nim)
    {
        $this->nim = $nim;
        $mahasiswa = Mahasiswa::findOrFail($nim);

        $query = DB::table('dosens')
            ->select('nama', 'nip')
            ->whereNotIn('nip', (function ($query) {
                $query->from('dosen_pembimbings')
                    ->select('nip_dosbing2')
                    ->where('nim', '=', function ($query) {
                        $query->from('mahasiswas')
                            ->select('nim')
                            ->where('nim', '=', $this->nim);
                    });
            }))
            ->get();

        $skripsi = DB::table('skripsis')
            ->select('judul_skripsi', 'bidang_ilmu')
            ->where('nim', '=', function ($skripsi) {
                $skripsi->from('mahasiswas')
                    ->select('nim')
                    ->where('nim', '=', $this->nim);
            })->get();
        return view('dosen.berkas.beritaAcaraSempro', compact('mahasiswa', 'query', 'skripsi'));
    }

    public function berkasPenilaianSempro($nim)
    {
        $this->nim = $nim;
        $mahasiswa = Mahasiswa::findOrFail($nim);

        $query = DB::table('dosens')
            ->select('nama', 'nip')
            ->whereNotIn('nip', (function ($query) {
                $query->from('dosen_pembimbings')
                    ->select('nip_dosbing2')
                    ->where('nim', '=', function ($query) {
                        $query->from('mahasiswas')
                            ->select('nim')
                            ->where('nim', '=', $this->nim);
                    });
            }))
            ->get();

        $skripsi = DB::table('skripsis')
            ->select('judul_skripsi', 'bidang_ilmu')
            ->where('nim', '=', function ($skripsi) {
                $skripsi->from('mahasiswas')
                    ->select('nim')
                    ->where('nim', '=', $this->nim);
            })->get();

        return view('dosen.berkas.penilaianKelayakanSempro', compact('mahasiswa', 'query', 'skripsi'));
    }

    public function berkasPersetujuanSemhas($nim)
    {
        $this->nim = $nim;
        $mahasiswa = Mahasiswa::findOrFail($nim);

        $query = DB::table('dosens')
            ->select('nama', 'nip')
            ->whereNotIn('nip', (function ($query) {
                $query->from('dosen_pembimbings')
                    ->select('nip_dosbing2')
                    ->where('nim', '=', function ($query) {
                        $query->from('mahasiswas')
                            ->select('nim')
                            ->where('nim', '=', $this->nim);
                    });
            }))
            ->get();

        $skripsi = DB::table('skripsis')
            ->select('judul_skripsi', 'bidang_ilmu')
            ->where('nim', '=', function ($skripsi) {
                $skripsi->from('mahasiswas')
                    ->select('nim')
                    ->where('nim', '=', $this->nim);
            })->get();

        return view('dosen.berkas.persetujuanSemhas', compact('mahasiswa', 'query', 'skripsi'));
    }

    public function berkasBeritaAcaraSemhas($nim)
    {
        $this->nim = $nim;
        $mahasiswa = Mahasiswa::findOrFail($nim);

        $query = DB::table('dosens')
            ->select('nama', 'nip')
            ->whereNotIn('nip', (function ($query) {
                $query->from('dosen_pembimbings')
                    ->select('nip_dosbing2')
                    ->where('nim', '=', function ($query) {
                        $query->from('mahasiswas')
                            ->select('nim')
                            ->where('nim', '=', $this->nim);
                    });
            }))
            ->get();

        $skripsi = DB::table('skripsis')
            ->select('judul_skripsi', 'bidang_ilmu')
            ->where('nim', '=', function ($skripsi) {
                $skripsi->from('mahasiswas')
                    ->select('nim')
                    ->where('nim', '=', $this->nim);
            })->get();

        return view('dosen.berkas.beritaAcaraSemhas', compact('mahasiswa', 'query', 'skripsi'));
    }

    public function berkasPersetujuanSidang($nim)
    {
        $this->nim = $nim;
        $mahasiswa = Mahasiswa::findOrFail($nim);

        $query = DB::table('dosens')
            ->select('nama', 'nip')
            ->whereNotIn('nip', (function ($query) {
                $query->from('dosen_pembimbings')
                    ->select('nip_dosbing2')
                    ->where('nim', '=', function ($query) {
                        $query->from('mahasiswas')
                            ->select('nim')
                            ->where('nim', '=', $this->nim);
                    });
            }))
            ->get();

        $skripsi = DB::table('skripsis')
            ->select('judul_skripsi', 'bidang_ilmu')
            ->where('nim', '=', function ($skripsi) {
                $skripsi->from('mahasiswas')
                    ->select('nim')
                    ->where('nim', '=', $this->nim);
            })->get();

        return view('dosen.berkas.persetujuanSidang', compact('mahasiswa', 'query', 'skripsi'));
    }

    public function berkasKataPengantarSidang($nim)
    {
        $this->nim = $nim;
        $mahasiswa = Mahasiswa::findOrFail($nim);

        return view('dosen.berkas.kataPengantarSidang', compact('mahasiswa'));
    }

    public function berkasBeritaAcaraSidang($nim)
    {
        $this->nim = $nim;
        $mahasiswa = Mahasiswa::findOrFail($nim);

        return view('dosen.berkas.beritaAcaraSidang', compact('mahasiswa'));
    }

    public function index()
    {
        return view('dosen.dashboard');
    }

    //INI MON
    public function mahasiswaTA()
    {
        $nip = Dosen::where('id_user', Auth::user()->id)->select('nip')->first();
        $mahasiswa = DB::table('v_progress_skripsi as ps')
            ->join('v_mhs_bimbingan as db', 'ps.nim', '=', 'db.nim')
            ->join('status_akses as sk', 'ps.nim', '=', 'sk.nim')
            ->select('db.nama_mhs', 'db.nim', 'ps.persentase_skripsi', 'ps.keterangan')
            ->where('nip', $nip->nip)->where('sk.no_statusAkses', '<', '7')
            ->get();

        $angkatan = DB::table('mahasiswas as m')
            ->select('m.angkatan')
            ->distinct()
            ->get();
        // dd($mahasiswa);
        return view('dosen.mahasiswaBimbingan-dosen', compact('mahasiswa', 'angkatan'));
    }

    public function mahasiswaLulus()
    {
        $nip = Dosen::where('id_user', Auth::user()->id)->select('nip')->first();
        $mahasiswa = DB::table('v_progress_skripsi as ps')
            ->join('v_mhs_bimbingan as db', 'ps.nim', '=', 'db.nim')
            ->join('mahasiswas as m', 'ps.nim', '=', 'm.nim')
            ->select('db.nama_mhs', 'db.nim')
            ->where('nip', $nip->nip)->where('m.status', '=', 'Lulus')
            ->get();
        // dd($mahasiswa);
        return view('dosen.mahasiswaBimbinganLulus-dosen', compact('mahasiswa'));
    }

    //INI MON
    public function detailMahasiswa($nim)
    {
        $query = DB::table('v_detail_mhs')->where('nim', $nim)
            ->select('nama', 'nim', 'angkatan', 'judul_skripsi', 'dosen_pembimbing')
            ->get();
        $progres = DB::table('v_progress_skripsi')->where('nim', $nim)
            ->select('persentase_skripsi', 'keterangan')
            ->get();
        return view('dosen.layoutMahasiswadetail', compact('query', 'progres'));
    }
    public function search_mhs_lulus(Request $request)
    {
        $nip = Dosen::where('id_user', Auth::user()->id)->select('nip')->first();
        $mahasiswa = DB::table('v_progress_skripsi as ps')
            ->join('v_mhs_bimbingan as db', 'ps.nim', '=', 'db.nim')
            ->join('mahasiswas as m', 'ps.nim', '=', 'm.nim')
            ->select('db.nama_mhs', 'db.nim')
            ->where('nip', $nip->nip)->where('m.status', '=', 'Lulus')
            ->where('db.nama_mhs', 'like', "%" . $request->keyword . "%")->where('nip', $nip->nip)
            ->orWhere('db.nim', 'like', "%" . $request->keyword . "%")->where('nip', $nip->nip)
            ->paginate(25);

        $counter = $mahasiswa->count();
        // dd($counter);

        return view('dosen/hasil_pencarian_lulus', compact('mahasiswa', 'counter'));
    }

    public function search_mhs_aktif(Request $request)
    {
        $nip = Dosen::where('id_user', Auth::user()->id)->select('nip')->first();
        $mahasiswa = DB::table('v_progress_skripsi as ps')
            ->join('v_mhs_bimbingan as db', 'ps.nim', '=', 'db.nim')
            ->join('status_akses as sk', 'ps.nim', '=', 'sk.nim')
            ->select('db.nama_mhs', 'db.nim', 'ps.persentase_skripsi', 'ps.keterangan')
            ->where('nip', $nip->nip)->where('sk.no_statusAkses', '<', '7')
            ->where('ps.keterangan', 'like', "%" . $request->keyword . "%")
            ->orWhere('ps.persentase_skripsi', 'like', "%" . $request->keyword . "%")->where('nip', $nip->nip)
            ->orWhere('db.nama_mhs', 'like', "%" . $request->keyword . "%")->where('nip', $nip->nip)
            ->orWhere('db.nim', 'like', "%" . $request->keyword . "%")->where('nip', $nip->nip)
            ->get();
        // dd($mahasiswa);

        $counter = $mahasiswa->count();

        $angkatan = DB::table('mahasiswas as m')
            ->select('m.angkatan')
            ->distinct()
            ->get();

        return view('dosen/hasil_pencarian_aktif', compact('mahasiswa', 'counter', 'angkatan'));
    }

    public function filter(Request $request)
    {
        $nip = Dosen::where('id_user', Auth::user()->id)->select('nip')->first();
        $mahasiswa = DB::table('v_progress_skripsi as ps')
            ->join('v_mhs_bimbingan as db', 'ps.nim', '=', 'db.nim')
            ->join('mahasiswas as m', 'ps.nim', '=', 'm.nim')
            ->join('status_akses as sk', 'ps.nim', '=', 'sk.nim')
            ->select('db.nama_mhs', 'db.nim', 'ps.persentase_skripsi', 'ps.keterangan', 'm.angkatan')
            ->where('nip', $nip->nip)->where('sk.no_statusAkses', '<', '7')
            ->where('m.angkatan', '=', $request->angkatan)
            ->get();

        // dd($mahasiswa);

        $angkatan = DB::table('mahasiswas as m')
            ->select('m.angkatan')
            ->distinct()
            ->get();
        $sum = $mahasiswa->count();
        $tahun = $request->angkatan;

        return view('dosen/filter', compact('mahasiswa', 'angkatan', 'sum', 'tahun'));
    }

    public function mahasiswaBimbingan()
    {
        return view('dosen.mahasiswaTA');
    }

    public function lembar_kendali($nim)
    {
        $this->nim = $nim;
        return view('dosen.lembar_kendali', compact('nim'));
    }

    public function lembar_kendali_sempro($nim)
    {
        $data       = DB::table('mahasiswas as m')
            ->join('dosen_pembimbings as dp', 'm.nim', '=', 'dp.nim')
            ->leftJoin('skripsis as s', 'm.nim', '=', 's.nim')
            ->join('jadwal_sempros as j', 'm.nim', '=', 'j.nim')
            ->select('m.nim', 'm.nama', 'dp.nip_dosbing1', 'dp.nip_dosbing2', 's.judul_skripsi', 'j.tanggal_sempro')
            ->where('m.nim', '=', $nim)
            ->first();
        $tanggal    = Carbon::parse($data->tanggal_sempro)->translatedFormat('l, d F Y');
        $dosbing1   = DB::table('dosens')->where('nip', '=', $data->nip_dosbing1)->select('nama')->first();
        $dosbing2   = DB::table('dosens')->where('nip', '=', $data->nip_dosbing2)->select('nama')->first();
        return view('dosen.berkas.lembar_kendali_sempro', compact('data', 'dosbing1', 'dosbing2', 'tanggal'));
    }

    public function lembar_kendali_semhas($nim)
    {
        $data   = DB::table('mahasiswas as m')
            ->join('dosen_pembimbings as dp', 'm.nim', '=', 'dp.nim')
            ->join('skripsis as s', 'm.nim', '=', 's.nim')
            ->join('jadwal_semhas as j', 'm.nim', '=', 'j.nim')
            ->select('m.nim', 'm.nama', 'dp.nip_dosbing1', 'dp.nip_dosbing2', 's.judul_skripsi', 'j.tanggal_semhas')
            ->where('m.nim', '=', $nim)
            ->first();
        $tanggal    = Carbon::parse($data->tanggal_semhas)->translatedFormat('l, d F Y');
        $dosbing1   = DB::table('dosens')->where('nip', '=', $data->nip_dosbing1)->select('nama')->first();
        $dosbing2   = DB::table('dosens')->where('nip', '=', $data->nip_dosbing2)->select('nama')->first();

        return view('dosen.berkas.lembar_kendali_semhas', compact('data', 'dosbing1', 'dosbing2', 'tanggal'));
    }

    public function lembar_kendali_sidang($nim)
    {
        $data   = DB::table('mahasiswas as m')
            ->join('dosen_pembimbings as dp', 'm.nim', '=', 'dp.nim')
            ->join('skripsis as s', 'm.nim', '=', 's.nim')
            ->join('jadwal_sidangs as j', 'm.nim', '=', 'j.nim')
            ->select('m.nim', 'm.nama', 'dp.nip_dosbing1', 'dp.nip_dosbing2', 's.judul_skripsi', 'j.tanggal_sidang')
            ->where('m.nim', '=', $nim)
            ->first();

        $tanggal    = Carbon::parse($data->tanggal_sidang)->translatedFormat('l, d F Y');
        $dosbing1   = DB::table('dosens')->where('nip', '=', $data->nip_dosbing1)->select('nama')->first();
        $dosbing2   = DB::table('dosens')->where('nip', '=', $data->nip_dosbing2)->select('nama')->first();
        return view('dosen.berkas.lembar_kendali_sidang', compact('data', 'dosbing1', 'dosbing2', 'tanggal'));
    }

    public function mahasiswaUji()
    {
        return view('dosen.mahasiswaUji.mahasiswaUji-dosen');
    }

    //INI MON
    public function mejaHijau()
    {
        $nip = Dosen::where('id_user', Auth::user()->id)->select('nip')->first();
        $query = DB::table('jdSidangMejaHijau')
            ->where('nip', $nip->nip)
            ->orderBy('tanggal_sidang', 'DESC')
            ->get();
        return view('dosen.sidangMejaHijau', compact('query'));
    }

    public function mejaHijau1()
    {
        return view('dosen.mahasiswaUji.mejaHijau-dosen');
    }

    public function pascaMeHij()
    {
        return view('dosen.mahasiswaBimbingan.pascaMeHij-dosen');
    }

    public function pascaMeHij1()
    {
        return view('dosen.mahasiswaUji.pascaMeHij-dosen');
    }

    public function praMehij()
    {
        return view('dosen.mahasiswaBimbingan.praMehij-dosen');
    }

    public function praMehij1()
    {
        return view('dosen.mahasiswaUji.praMehij-dosen');
    }

    public function progresSkripsi()
    {
        return view('dosen.mahasiswaBimbingan.progresSkripsi-dosen');
    }

    public function semhas()
    {
        $nip = Dosen::where('id_user', Auth::user()->id)->select('nip')->first();
        $query = DB::table('v_jdSemhas')
            ->where('nip', $nip->nip)
            ->orderBy('tanggal_semhas', 'DESC')
            ->get();
        return view('dosen.semhas', compact('query'));
    }

    public function semhas1()
    {
        return view('dosen.mahasiswaUji.semhas-dosen');
    }

    public function sempro()
    {
        // dd($data);
        $nip = Dosen::where('id_user', Auth::user()->id)->select('nip')->first();
        $query = DB::table('v_jdSempro')
            ->where('nip', $nip->nip)
            ->orderBy('tanggal_sempro', 'DESC')
            ->get();

        return view('dosen.sempro', compact('query'));
    }

    public function sempro1()
    {
        return view('dosen.mahasiswaUji.sempro-dosen');
    }

    public function jadwalSeminarSidang()
    {
        return view('dosen.mahasiswaBimbingan.sidMejaHijau-dosen');
    }

    public function sidMejaHijau1()
    {
        return view('dosen.mahasiswaUji.sidMejaHijau-dosen');
    }
}
