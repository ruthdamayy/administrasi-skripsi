<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KaprodiController;
use Illuminate\Support\Facades\Auth;


// LOGIN PAGE FOR FIRST TIME ARRIVAL
Route::get('/', function () {
    return view('auth.login');
});

// AUTHENTICATION ROUTES
Auth::routes(['register' => false]);

// ROUTES FOR MAHASISWA
Route::get('/mahasiswa/dashboard', [MahasiswaController::class, 'index'])->middleware('cekstatus:mahasiswa');
Route::get('/mahasiswa/pra_sempro', [MahasiswaController::class, 'pra_sempro'])->middleware('cekstatus:mahasiswa');
// Route::get('/mahasiswa/pra_sempro', [MahasiswaController::class, 'pra_sempro'])->middleware('cekstatus:mahasiswa');
Route::get('/mahasiswa/pra_semhas', [MahasiswaController::class, 'pra_semhas'])->middleware('cekstatus:mahasiswa');
Route::get('/mahasiswa/pra_sidang', [MahasiswaController::class, 'pra_sidang'])->middleware('cekstatus:mahasiswa');
Route::get('/mahasiswa/pendaftaran_judul', [MahasiswaController::class, 'pendaftaran_judul'])->middleware('cekstatus:mahasiswa')->name('pendaftaran_judul');
Route::post('/mahasiswa/store_judul', [MahasiswaController::class, 'store_judul'])->middleware('cekstatus:mahasiswa')->name('store_judul');
Route::get('/mahasiswa/edit_judul', [MahasiswaController::class, 'edit_judul'])->middleware('cekstatus:mahasiswa')->name('perbaikan_judul');
Route::post('/mahasiswa/store_new_judul', [MahasiswaController::class, 'store_new_judul'])->middleware('cekstatus:mahasiswa')->name('store_new_judul');
Route::get('/mahasiswa/jurnal', [MahasiswaController::class, 'jurnal'])->middleware('cekstatus:mahasiswa');
Route::get('/mahasiswa/penggandaan_skripsi', [MahasiswaController::class, 'penggandaan_skripsi'])->middleware('cekstatus:mahasiswa');
Route::get('mahasiswa/lembar_kendali_proposal', [MahasiswaController::class, 'lembar_kendali_proposal'])->middleware('cekstatus:mahasiswa')->name('mhs_lks');
Route::get('/mahasiswa/lembar_kendali_semhas', [MahasiswaController::class, 'lembar_kendali_semhas'])->middleware('cekstatus:mahasiswa');
Route::get('/mahasiswa/lembar_kendali_sidang', [MahasiswaController::class, 'lembar_kendali_sidang'])->middleware('cekstatus:mahasiswa');
Route::get('/mahasiswa/pengajuan_judul_skripsi', [MahasiswaController::class, 'pengajuan_judul_skripsi'])->middleware('cekstatus:mahasiswa');
Route::get('/mahasiswa/jadwal_sempro', [MahasiswaController::class, 'jadwal_sempro'])->middleware('cekstatus:mahasiswa');
Route::get('/mahasiswa/jadwal_semhas', [MahasiswaController::class, 'jadwal_semhas'])->middleware('cekstatus:mahasiswa');
Route::get('/mahasiswa/jadwal_sidang', [MahasiswaController::class, 'jadwal_sidang'])->middleware('cekstatus:mahasiswa');
Route::get('/mahasiswa/calon_pembimbing/{id}', [MahasiswaController::class, 'calon_pembimbing'])->middleware('cekstatus:mahasiswa');
Route::post('/mahasiswa/ajukan_exum', [MahasiswaController::class, 'ajukan_exum'])->middleware('cekstatus:mahasiswa')->name('ajukan_exum');
Route::get('/mahasiswa/ajukan_bidang_ilmu', [MahasiswaController::class, 'ajukan_bidang_ilmu'])->middleware('cekstatus:mahasiswa')->name('ajukan_bidang_ilmu');
Route::get('/mahasiswa/download_exum', [MahasiswaController::class, 'download_exum'])->middleware('cekstatus:mahasiswa')->name('download_exum');
Route::get('/mahasiswa/daftar_judul', [MahasiswaController::class, 'daftar_judul'])->middleware('cekstatus:mahasiswa')->name('daftar_judul');
Route::get('/mahasiswa/pasca_meja_hijau', [MahasiswaController::class, 'pasca_meja_hijau'])->middleware('cekstatus:mahasiswa');
Route::get('/mahasiswa/format_jurnal', [MahasiswaController::class, 'format_jurnal'])->middleware('cekstatus:mahasiswa');
Route::get('/mahasiswa/profile', [MahasiswaController::class, 'profile'])->middleware('cekstatus:mahasiswa')->name('profile_mhs');
Route::post('/mahasiswa/profile', [MahasiswaController::class, 'update_profile'])->middleware('cekstatus:mahasiswa')->name('upd_mhs');
// END ROUTES FOR MAHASISWA


// ROUTES FOR ADMIN
Route::get('/admin/dashboard', [AdminController::class, 'index'])->middleware('cekstatus:admin');
//user management
Route::get('/admin/mng_user', [AdminController::class, 'manage_user'])->middleware('cekstatus:admin');
Route::get('/admin/manajemen_admin', [AdminController::class, 'manajemen_admin'])->middleware('cekstatus:admin');
Route::get('/admin/add_admin', [AdminController::class, 'add_admin'])->middleware('cekstatus:admin');
Route::post('/admin/regis_admin', [AdminController::class, 'store_admin'])->middleware('cekstatus:admin')->name('add_admin');
Route::get('/admin/edit_admin', [AdminController::class, 'edit_admin'])->middleware('cekstatus:admin');
Route::post('/admin/store_upd_admin', [AdminController::class, 'store_upd_admin'])->middleware('cekstatus:admin')->name('update_admin');
Route::post('/admin/delete_adm', [AdminController::class, 'delete_adm'])->middleware('cekstatus:admin');

Route::get('/admin/manajemen_prodi', [AdminController::class, 'manajemen_prodi'])->middleware('cekstatus:admin');
Route::get('/admin/add_prodi', [AdminController::class, 'add_prodi'])->middleware('cekstatus:admin');
Route::post('/admin/regis_prodi', [AdminController::class, 'store_prodi'])->middleware('cekstatus:admin')->name('add_prodi');
Route::get('/admin/edit_prodi', [AdminController::class, 'edit_prodi'])->middleware('cekstatus:admin');
Route::post('/admin/store_upd_prodi', [AdminController::class, 'store_upd_prodi'])->middleware('cekstatus:admin')->name('update_prodi');
Route::post('/admin/delete_prodi', [AdminController::class, 'delete_prodi'])->middleware('cekstatus:admin');

Route::get('/admin/manajemen_dosen', [AdminController::class, 'manajemen_dosen'])->middleware('cekstatus:admin');
Route::get('/admin/add_dosen', [AdminController::class, 'add_dosen'])->middleware('cekstatus:admin');
Route::post('/admin/regis_dosen', [AdminController::class, 'store_dosen'])->middleware('cekstatus:admin')->name('add_dosen');
Route::get('/admin/edit_dosen', [AdminController::class, 'edit_dosen'])->middleware('cekstatus:admin');
Route::post('/admin/store_upd_dosen', [AdminController::class, 'store_upd_dosen'])->middleware('cekstatus:admin')->name('update_dosen');
Route::post('/admin/delete_dosen', [AdminController::class, 'delete_dosen'])->middleware('cekstatus:admin');

Route::get('/admin/manajemen_mhs', [AdminController::class, 'manajemen_mhs'])->middleware('cekstatus:admin');
Route::get('/admin/add_mhs', [AdminController::class, 'add_mhs'])->middleware('cekstatus:admin');
Route::post('/admin/regis_mhs', [AdminController::class, 'store_mhs'])->middleware('cekstatus:admin')->name('add_mhs');
Route::get('/admin/edit_mhs', [AdminController::class, 'edit_mhs'])->middleware('cekstatus:admin');
Route::post('/admin/store_upd_mhs', [AdminController::class, 'store_upd_mhs'])->middleware('cekstatus:admin')->name('update_mhs');
Route::post('/admin/delete_mhs', [AdminController::class, 'delete_mhs'])->middleware('cekstatus:admin');
// end user management

// schedule / penjadwalan
Route::get('/admin/penjadwalan', [AdminController::class, 'penjadwalan'])->middleware('cekstatus:admin')->name('penjadwalan');
Route::get('/admin/jadwal_sempro', [AdminController::class, 'penjadwalan_sempro'])->middleware('cekstatus:admin')->name('jadwal_sempro');
Route::get('/admin/jadwal_semhas', [AdminController::class, 'penjadwalan_semhas'])->middleware('cekstatus:admin')->name('jadwal_semhas');
Route::get('/admin/jadwal_sidang', [AdminController::class, 'penjadwalan_sidang'])->middleware('cekstatus:admin')->name('jadwal_sidang');
Route::get('/admin/add_jd_sempro', [AdminController::class, 'add_jd_sempro'])->middleware('cekstatus:admin')->name('add_jd_sempro');
Route::get('/admin/add_jd_semhas', [AdminController::class, 'add_jd_semhas'])->middleware('cekstatus:admin')->name('add_jd_semhas');
Route::get('/admin/add_jd_sidang', [AdminController::class, 'add_jd_sidang'])->middleware('cekstatus:admin')->name('add_jd_sidang');
Route::post('/admin/store_jd_sempro', [AdminController::class, 'store_jd_sempro'])->middleware('cekstatus:admin')->name('store_jd_sempro');
Route::post('/admin/store_jd_semhas', [AdminController::class, 'store_jd_semhas'])->middleware('cekstatus:admin')->name('store_jd_semhas');
Route::post('/admin/store_jd_sidang', [AdminController::class, 'store_jd_sidang'])->middleware('cekstatus:admin')->name('store_jd_sidang');
Route::post('/admin/edit_jd_sempro', [AdminController::class, 'edit_jd_sempro'])->middleware('cekstatus:admin')->name('edit_jd_sempro');
Route::post('/admin/edit_jd_semhas', [AdminController::class, 'edit_jd_semhas'])->middleware('cekstatus:admin')->name('edit_jd_semhas');
Route::post('/admin/edit_jd_sidang', [AdminController::class, 'edit_jd_sidang'])->middleware('cekstatus:admin')->name('edit_jd_sidang');
Route::post('/admin/store_new_jd_sempro', [AdminController::class, 'store_new_jd_sempro'])->middleware('cekstatus:admin')->name('store_new_jd_sempro');
Route::post('/admin/store_new_jd_semhas', [AdminController::class, 'store_new_jd_semhas'])->middleware('cekstatus:admin')->name('store_new_jd_semhas');
Route::post('/admin/store_new_jd_sidang', [AdminController::class, 'store_new_jd_sidang'])->middleware('cekstatus:admin')->name('store_new_jd_sidang');
Route::post('/admin/delete_jd_sempro', [AdminController::class, 'delete_jd_sempro'])->middleware('cekstatus:admin')->name('delete_jd_sempro');
Route::post('/admin/delete_jd_semhas', [AdminController::class, 'delete_jd_semhas'])->middleware('cekstatus:admin')->name('delete_jd_semhas');
Route::post('/admin/delete_jd_sidang', [AdminController::class, 'delete_jd_sidang'])->middleware('cekstatus:admin')->name('delete_jd_sidang');
// end schedule

// routes for menu mahasiswa TA
Route::get('/admin/mahasiswa_ta', [AdminController::class, 'mahasiswa_ta'])->middleware('cekstatus:admin')->name('mhs_ta');
Route::get('/admin/mahasiswa_aktif', [AdminController::class, 'mahasiswa_aktif'])->middleware('cekstatus:admin')->name('aktif');
Route::get('/admin/hasil_filter', [AdminController::class, 'filter'])->middleware('cekstatus:admin')->name('filter_mhs');
Route::get('/admin/hasil_filter_progress_skripsi', [AdminController::class, 'filter2'])->middleware('cekstatus:admin')->name('filter_mhs2');
Route::get('/admin/alumni', [AdminController::class, 'alumni'])->middleware('cekstatus:admin')->name('alumni');
Route::get('/admin/search', [AdminController::class, 'cari_mhs'])->middleware('cekstatus:admin')->name('cari_mhs');
Route::get('/admin/cari_alumni', [AdminController::class, 'cari_alumni'])->middleware('cekstatus:admin')->name('cari_alumni');
//end routes for menu mahasiswa TA
Route::get('/admin/page_pra_sempro', [AdminController::class, 'page_pra_sempro'])->middleware('cekstatus:admin')->name('prasempro_menu');
Route::get('/admin/list_dosbing', [AdminController::class, 'list_dosbing'])->middleware('cekstatus:admin')->name('daftar_dosbing');
Route::post('/admin/add_dosbing', [AdminController::class, 'add_dosbing'])->middleware('cekstatus:admin')->name('add_dosbing');
Route::post('/admin/store_dosbing', [AdminController::class, 'store_dosbing'])->middleware('cekstatus:admin')->name('store_dosbing');
Route::post('/admin/edit_dosbing', [AdminController::class, 'edit_dosbing'])->middleware('cekstatus:admin')->name('edit_dosbing');
Route::post('/admin/store_new_dosbing', [AdminController::class, 'store_new_dosbing'])->middleware('cekstatus:admin')->name('store_new_dosbing');
Route::post('/admin/delete_dosbing', [AdminController::class, 'delete_dosbing'])->middleware('cekstatus:admin')->name('delete_dosbing');
Route::get('/admin/list_skripsi', [AdminController::class, 'list_skripsi'])->middleware('cekstatus:admin')->name('daftar_skripsi');
Route::get('/admin/add_skripsi', [AdminController::class, 'add_skripsi'])->middleware('cekstatus:admin')->name('regisSkripsi');
Route::post('/admin/store_skripsi', [AdminController::class, 'store_skripsi'])->middleware('cekstatus:admin')->name('storeSkripsi');
Route::post('/admin/edit_skripsi', [AdminController::class, 'edit_skripsi'])->middleware('cekstatus:admin')->name('editSkripsi');
Route::post('/admin/store_new_skripsi', [AdminController::class, 'store_new_skripsi'])->middleware('cekstatus:admin')->name('storeNewSkripsi');
Route::post('/admin/delete_skripsi', [AdminController::class, 'delete_skripsi'])->middleware('cekstatus:admin')->name('deleteSkripsi');

//routes for log aktivitas
Route::get('/admin/riwayat_aktivitas', [AdminController::class, 'log_aktivitas'])->middleware('cekstatus:admin')->name('log_aktivitas');
Route::get('/admin/riwayat_pendaftaran_dosbing', [AdminController::class, 'log_pendaftaran_dosbing'])->middleware('cekstatus:admin')->name('log_pendaftaran_dosbing');
Route::get('/admin/hasil_pencarian_riwayat_pendaftaran_dosbing', [AdminController::class, 'cari_log_daftar_dosbing'])->middleware('cekstatus:admin')->name('cariLogDaftarDosbing');
Route::get('/admin/riwayat_pengubahan_dosbing', [AdminController::class, 'log_pengubahan_dosbing'])->middleware('cekstatus:admin')->name('log_pengubahan_dosbing');
Route::get('/admin/hasil_pencarian_riwayat_pengubahan_dosbing', [AdminController::class, 'cari_log_ubah_dosbing'])->middleware('cekstatus:admin')->name('cariLogUbahDosbing');
Route::get('/admin/riwayat_penghapusan_dosbing', [AdminController::class, 'log_penghapusan_dosbing'])->middleware('cekstatus:admin')->name('log_penghapusan_dosbing');
Route::get('/admin/hasil_pencarian_riwayat_penghapusan_dosbing', [AdminController::class, 'cari_log_hapus_dosbing'])->middleware('cekstatus:admin')->name('cariLogHapusDosbing');
Route::get('/admin/riwayat_pendaftaran_skripsi', [AdminController::class, 'log_pendaftaran_skripsi'])->middleware('cekstatus:admin')->name('log_pendaftaran_skripsi');
Route::get('/admin/hasil_pencarian_riwayat_pendaftaran_skripsi', [AdminController::class, 'cari_log_daftar_skripsi'])->middleware('cekstatus:admin')->name('cariLogDaftarSkripsi');
Route::get('/admin/riwayat_pengubahan_skripsi', [AdminController::class, 'log_pengubahan_skripsi'])->middleware('cekstatus:admin')->name('log_pengubahan_skripsi');
Route::get('/admin/hasil_pencarian_riwayat_pengubahan_skripsi', [AdminController::class, 'cari_log_ubah_skripsi'])->middleware('cekstatus:admin')->name('cariLogUbahSkripsi');
Route::get('/admin/riwayat_penghapusan_skripsi', [AdminController::class, 'log_penghapusan_skripsi'])->middleware('cekstatus:admin')->name('log_penghapusan_skripsi');
Route::get('/admin/hasil_pencarian_riwayat_penghapusan_skripsi', [AdminController::class, 'cari_log_hapus_skripsi'])->middleware('cekstatus:admin')->name('cariLogHapusSkripsi');
// end routes for log aktivitas

// routes untuk penilaian
Route::get('/admin/input_nilai', [AdminController::class, 'input_nilai'])->middleware('cekstatus:admin')->name('adm_input_nilai');
Route::get('/admin/daftar_nilai_uji_program', [AdminController::class, 'daftar_nilai_uji_program'])->middleware('cekstatus:admin')->name('adm_nilai_uji_program');
Route::get('/admin/add_nilai_uji_program', [AdminController::class, 'add_nilai_uji_program'])->middleware('cekstatus:admin')->name('adm_add_nilai_uji_program');
Route::post('/admin/store_nilai_uji_program', [AdminController::class, 'store_nilai_program'])->middleware('cekstatus:admin')->name('adm_store_nilai_program');
Route::get('/admin/edit_nilai_uji_program', [AdminController::class, 'edit_nilai_uji_program'])->middleware('cekstatus:admin')->name('adm_edit_nilai_uji_program');
Route::post('/admin/store_upd_nilai_uji_program', [AdminController::class, 'store_upd_nilai_uji_program'])->middleware('cekstatus:admin')->name('adm_store_upd_nilai_program');
Route::post('/admin/delete_nilai_uji_program', [AdminController::class, 'delete_nilai_uji_program'])->middleware('cekstatus:admin')->name('adm_delete_nilai_uji_program');

Route::get('/admin/daftar_nilai_IPK', [AdminController::class, 'daftar_nilai_IPK'])->middleware('cekstatus:admin')->name('adm_nilai_IPK');
Route::get('/admin/add_nilai_IPK', [AdminController::class, 'add_nilai_IPK'])->middleware('cekstatus:admin')->name('adm_add_nilai_IPK');
Route::post('/admin/store_nilai_IPK', [AdminController::class, 'store_nilai_IPK'])->middleware('cekstatus:admin')->name('adm_store_nilai_IPK');
Route::get('/admin/edit_nilai_IPK', [AdminController::class, 'edit_nilai_IPK'])->middleware('cekstatus:admin')->name('adm_edit_nilai_IPK');
Route::post('/admin/store_upd_nilai_IPK', [AdminController::class, 'store_upd_nilai_IPK'])->middleware('cekstatus:admin')->name('adm_store_upd_nilai_IPK');
Route::post('/admin/delete_nilai_IPK', [AdminController::class, 'delete_nilai_IPK'])->middleware('cekstatus:admin')->name('adm_delete_nilai_IPK');

Route::get('/admin/daftar_nilai_sidang', [AdminController::class, 'daftar_nilai_sidang_meja_hijau'])->middleware('cekstatus:admin')->name('nilai_sidang_admin');
Route::get('/admin/add_nilai_sidang', [AdminController::class, 'add_nilai_sidang'])->middleware('cekstatus:admin')->name('add_nilai_sidang_admin');
Route::post('/admin/store_nilai_sidang', [AdminController::class, 'store_nilai_sidang'])->middleware('cekstatus:admin')->name('store_nilai_sidang_admin');
Route::get('/admin/edit_nilai_sidang', [AdminController::class, 'edit_nilai_sidang'])->middleware('cekstatus:admin')->name('edit_nilai_sidang_admin');
Route::post('/admin/store_upd_nilai_sidang', [AdminController::class, 'store_upd_nilai_sidang'])->middleware('cekstatus:admin')->name('store_upd_nilai_sidang_admin');
Route::post('/admin/delete_nilai_sidang', [AdminController::class, 'delete_nilai_sidang'])->middleware('cekstatus:admin')->name('delete_nilai_sidang_admin');

Route::get('/admin/daftar_nilai_semhas', [AdminController::class, 'daftar_nilai_semhas'])->middleware('cekstatus:admin')->name('adm_nilai_semhas');
Route::get('/admin/add_nilai_semhas', [AdminController::class, 'add_nilai_semhas'])->middleware('cekstatus:admin')->name('adm_add_nilai_semhas');
Route::post('/admin/store_nilai_semhas', [AdminController::class, 'store_nilai_semhas'])->middleware('cekstatus:admin')->name('adm_store_nilai_semhas');
Route::get('/admin/edit_nilai_semhas', [AdminController::class, 'edit_nilai_semhas'])->middleware('cekstatus:admin')->name('adm_edit_nilai_semhas');
Route::post('/admin/store_upd_nilai_semhas', [AdminController::class, 'store_upd_nilai_semhas'])->middleware('cekstatus:admin')->name('adm_store_upd_nilai_semhas');
Route::post('/admin/delete_nilai_semhas', [AdminController::class, 'delete_nilai_semhas'])->middleware('cekstatus:admin')->name('adm_delete_nilai_semhas');

// end routes untuk penilaian

Route::get('/admin/my_profile', [AdminController::class, 'profile_saya'])->middleware('cekstatus:admin')->name('profile_admin');
Route::post('/admin/my_profile', [AdminController::class, 'store_new_admin'])->middleware('cekstatus:admin')->name('store_new_admin');
Route::get('/admin/page_pra_semhas', [AdminController::class, 'page_pra_semhas'])->middleware('cekstatus:admin')->name('prasemhas_menu');
Route::get('/admin/list_dosbing', [AdminController::class, 'list_dosbing'])->middleware('cekstatus:admin')->name('daftar_dosbing');
Route::get('/admin/list_dosenPenguji', [AdminController::class, 'list_dosenPenguji'])->middleware('cekstatus:admin')->name('daftar_dosenPenguji');
Route::post('/admin/add_dosbing', [AdminController::class, 'add_dosbing'])->middleware('cekstatus:admin')->name('add_dosbing');
Route::post('/admin/add_dosen_penguji', [AdminController::class, 'add_dosen_penguji'])->middleware('cekstatus:admin')->name('add_dosen_penguji');
Route::post('/admin/store_dosbing', [AdminController::class, 'store_dosbing'])->middleware('cekstatus:admin')->name('store_dosbing');
Route::post('/admin/store_dosen_penguji', [AdminController::class, 'store_dosen_penguji'])->middleware('cekstatus:admin')->name('store_dosen_penguji');
Route::post('/admin/edit_dosbing', [AdminController::class, 'edit_dosbing'])->middleware('cekstatus:admin')->name('edit_dosbing');
Route::post('/admin/store_new_dosbing', [AdminController::class, 'store_new_dosbing'])->middleware('cekstatus:admin')->name('store_new_dosbing');
Route::post('/admin/edit_dosen_penguji', [AdminController::class, 'edit_dosen_penguji'])->middleware('cekstatus:admin')->name('edit_dosen_penguji');
Route::post('/admin/store_new_dosen_penguji', [AdminController::class, 'store_new_dosen_penguji'])->middleware('cekstatus:admin')->name('store_new_dosen_penguji');
Route::post('/admin/delete_dosbing', [AdminController::class, 'delete_dosbing'])->middleware('cekstatus:admin')->name('delete_dosbing');
Route::post('/admin/delete_dosen_penguji', [AdminController::class, 'delete_dosen_penguji'])->middleware('cekstatus:admin')->name('delete_dosen_penguji');
Route::get('/admin/validasi_sempro', [AdminController::class, 'validasi_sempro'])->middleware('cekstatus:admin');
Route::get('/admin/validasi_semhas', [AdminController::class, 'validasi_semhas'])->middleware('cekstatus:admin');
Route::get('/admin/validasi_sidang', [AdminController::class, 'validasi_sidang'])->middleware('cekstatus:admin');
Route::get('/admin/validasi_penggandaan', [AdminController::class, 'validasi_penggandaan'])->middleware('cekstatus:admin');
Route::get('/admin/formValidasiSempro/{nim}', [AdminController::class, 'form_validasi_berkas'])->middleware('cekstatus:admin');
Route::get('/admin/beritaAcaraSempro/{nim}', [AdminController::class, 'berita_acara_sempro'])->middleware('cekstatus:admin');
// Route::get('/admin/undanganSempro',[AdminController::class,'undangan_sempro'])->middleware('cekstatus:admin');
Route::get('/admin/formPenilaianSempro/{nim}', [AdminController::class, 'form_penilaian_sempro'])->middleware('cekstatus:admin');
Route::get('/admin/pesertaSempro', [AdminController::class, 'pesertaSempro'])->middleware('cekstatus:admin');
Route::get('/admin/pesertaSemhas', [AdminController::class, 'pesertaSemhas'])->middleware('cekstatus:admin');
Route::get('/admin/formPersetujuanSemhas/{nim}', [AdminController::class, 'form_persetujuan_semhas'])->middleware('cekstatus:admin');
Route::get('/admin/beritaAcaraSemhas/{nim}', [AdminController::class, 'berita_acara_semhas'])->middleware('cekstatus:admin');
// Route::get('/admin/undanganSemhas',[AdminController::class,'undangan_semhas'])->middleware('cekstatus:admin');
Route::get('/admin/formPenilaianSemhas/{nim}', [AdminController::class, 'form_penilaian_semhas'])->middleware('cekstatus:admin');
Route::get('/admin/lembarKendaliSempro/{nim}', [AdminController::class, 'lembar_kendali_sempro'])->middleware('cekstatus:admin');
Route::get('/admin/lembarKendaliSemhas/{nim}', [AdminController::class, 'lembar_kendali_semhas'])->middleware('cekstatus:admin');
Route::get('/admin/lembarKendaliSidang/{nim}', [AdminController::class, 'lembar_kendali_sidang'])->middleware('cekstatus:admin');
Route::get('/admin/pesertaSidang', [AdminController::class, 'pesertaSidang'])->middleware('cekstatus:admin');
Route::get('/admin/formPersetujuanSidang/{nim}', [AdminController::class, 'form_persetujuan_sidang'])->middleware('cekstatus:admin');
Route::get('/admin/beritaAcaraSidang/{nim}', [AdminController::class, 'berita_acara_sidang'])->middleware('cekstatus:admin');
Route::get('/admin/beritaAcaraSidang_kosong/{nim}', [AdminController::class, 'berita_acara_sidang_kosong'])->middleware('cekstatus:admin');
Route::get('/admin/kataPengantarSidang/{nim}', [AdminController::class, 'kata_pengantar_sidang'])->middleware('cekstatus:admin');
// Route::get('/admin/undangan_sidang',[AdminController::class,'undangan_sidang'])->middleware('cekstatus:admin');
Route::get('/admin/formPenilaianSidang/{nim}', [AdminController::class, 'form_penilaian_sidang'])->middleware('cekstatus:admin');
Route::get('/admin/approveSempro/{nim}', [AdminController::class, 'approve_sempro'])->middleware('cekstatus:admin');
Route::get('/admin/approveSemhas/{nim}', [AdminController::class, 'approve_semhas'])->middleware('cekstatus:admin');
Route::get('/admin/approveSidang/{nim}', [AdminController::class, 'approve_sidang'])->middleware('cekstatus:admin');
Route::get('/admin/declineSempro/{nim}', [AdminController::class, 'decline_sempro'])->middleware('cekstatus:admin');
Route::get('/admin/declineSemhas/{nim}', [AdminController::class, 'decline_semhas'])->middleware('cekstatus:admin');
Route::get('/admin/declineSidang/{nim}', [AdminController::class, 'decline_sidang'])->middleware('cekstatus:admin');
Route::get('/admin/cetakSempro', [AdminController::class, 'cetakSempro'])->middleware('cekstatus:admin');
Route::post('/admin/cetakJadwalSempro', [AdminController::class, 'cetakJadwalSempro'])->middleware('cekstatus:admin')->name('cetakJadwalSempro');
Route::post('/admin/cetakUndanganSempro', [AdminController::class, 'cetakUndanganSempro'])->middleware('cekstatus:admin')->name('cetakUndanganSempro');
Route::get('/admin/cetakSemhas', [AdminController::class, 'cetakSemhas'])->middleware('cekstatus:admin');
Route::post('/admin/cetakJadwalSemhas', [AdminController::class, 'cetakJadwalSemhas'])->middleware('cekstatus:admin')->name('cetakJadwalSemhas');
Route::post('/admin/cetakUndanganSemhas', [AdminController::class, 'cetakUndanganSemhas'])->middleware('cekstatus:admin')->name('cetakUndanganSemhas');
Route::get('/admin/cetakSidang', [AdminController::class, 'cetakSidang'])->middleware('cekstatus:admin');
Route::post('/admin/cetakJadwalSidang', [AdminController::class, 'cetakJadwalSidang'])->middleware('cekstatus:admin')->name('cetakJadwalSidang');
Route::post('/admin/cetakUndanganSidang', [AdminController::class, 'cetakUndanganSidang'])->middleware('cekstatus:admin')->name('cetakUndanganSidang');
Route::get('/admin/formPenilaianUjiProgram/{nim}', [AdminController::class, 'form_penilaian_uji_program'])->middleware('cekstatus:admin');
Route::get('/admin/formPenilaianUjiProgramKosong/{nim}', [AdminController::class, 'form_penilaian_uji_program_kosong'])->middleware('cekstatus:admin');

Route::get('admin/tes', [AdminController::class, 'tes'])->middleware('cekstatus:admin');
// END ROUTES FOR ADMIN



// ROUTES FOR DOSEN
Route::get('/dosen/dashboard', [DosenController::class, 'index'])->middleware('cekstatus:dosen');
Route::get('/dosen/mhs_bimbingan', [DosenController::class, 'mhs_bimbingan'])->middleware('cekstatus:dosen')->name('mhs_bimbingan');
Route::get('/dosen/mahasiswaTA/', [DosenController::class, 'mahasiswaBimbingan'])->middleware('cekstatus:dosen')->name('mahasiswa_ta');
Route::get('/dosen/mahasiswaBimbingan', [DosenController::class, 'mahasiswaTA'])->middleware('cekstatus:dosen')->name('mhs_aktif');
Route::get('/dosen/mahasiswaLulus', [DosenController::class, 'mahasiswaLulus'])->middleware('cekstatus:dosen')->name('lulus');
// bimbingan
Route::get('/dosen/bimbingan_sempro', [DosenController::class, 'bimbingan_sempro'])->middleware('cekstatus:dosen')->name('bimbingan_sempro');
Route::post('/dosen/simpan_bimbingan_sempro', [DosenController::class, 'simpan_bimbingan_sempro'])->middleware('cekstatus:dosen')->name('simpan_bimbingan_sempro');
Route::get('/dosen/bimbingan_semhas', [DosenController::class, 'bimbingan_semhas'])->middleware('cekstatus:dosen')->name('bimbingan_semhas');
Route::post('/dosen/simpan_bimbingan_semhas', [DosenController::class, 'simpan_bimbingan_semhas'])->middleware('cekstatus:dosen')->name('simpan_bimbingan_semhas');
Route::get('/dosen/bimbingan_sidang', [DosenController::class, 'bimbingan_sidang'])->middleware('cekstatus:dosen')->name('bimbingan_sidang');
Route::post('/dosen/simpan_bimbingan_sidang', [DosenController::class, 'simpan_bimbingan_sidang'])->middleware('cekstatus:dosen')->name('simpan_bimbingan_sidang');
Route::get('/dosen/detailMahasiswaBimbingan/{nim}', [DosenController::class, 'detailMahasiswa'])->middleware('cekstatus:dosen');
Route::get('/dosen/mahasiswaUji', [DosenController::class, 'mahasiswaUji'])->middleware('cekstatus:dosen');
Route::get('/dosen/pascaMeHij', [DosenController::class, 'pascaMeHij'])->middleware('cekstatus:dosen');
Route::get('/dosen/praMehij', [DosenController::class, 'praMeHij'])->middleware('cekstatus:dosen');
Route::get('/dosen/pascaMeHij1', [DosenController::class, 'pascaMeHij1'])->middleware('cekstatus:dosen');
Route::get('/dosen/praMehij1', [DosenController::class, 'praMeHij1'])->middleware('cekstatus:dosen');
Route::get('/dosen/progresSkripsi', [DosenController::class, 'progresSkripsi'])->middleware('cekstatus:dosen');
Route::get('/dosen/sempro', [DosenController::class, 'sempro'])->middleware('cekstatus:dosen');
Route::get('/dosen/semhas', [DosenController::class, 'semhas'])->middleware('cekstatus:dosen');
Route::get('/dosen/sempro1', [DosenController::class, 'sempro1'])->middleware('cekstatus:dosen');
Route::get('/dosen/semhas1', [DosenController::class, 'semhas1'])->middleware('cekstatus:dosen');
Route::get('/dosen/jadwalSeminarSidang', [DosenController::class, 'jadwalSeminarSidang'])->middleware('cekstatus:dosen');
Route::get('/dosen/sidang', [DosenController::class, 'mejaHijau'])->middleware('cekstatus:dosen');
Route::get('/dosen/sidMejaHijau1', [DosenController::class, 'sidMejaHijau1'])->middleware('cekstatus:dosen');
Route::get('/dosen/mejaHijau1', [DosenController::class, 'mejaHijau1'])->middleware('cekstatus:dosen');
Route::get('/dosen/tampilMahasiswa/{nim}', [DosenController::class, 'berkasBeritaAcara'])->middleware('cekstatus:dosen');
Route::get('/dosen/tampilMahasiswa2/{nim}', [DosenController::class, 'berkasPenilaianSempro'])->middleware('cekstatus:dosen');
Route::get('/dosen/berkasSemhas1/{nim}', [DosenController::class, 'berkasPersetujuanSemhas'])->middleware('cekstatus:dosen');
Route::get('/dosen/berkasSemhas2/{nim}', [DosenController::class, 'berkasBeritaAcaraSemhas'])->middleware('cekstatus:dosen');
Route::get('/dosen/berkasSemhas3/{nim}', [DosenController::class, 'berkasPersetujuanSidang'])->middleware('cekstatus:dosen');
Route::get('/dosen/berkasSemhas4/{nim}', [DosenController::class, 'berkasKataPengantarSidang'])->middleware('cekstatus:dosen');
Route::get('/dosen/berkasSemhas5/{nim}', [DosenController::class, 'berkasBeritaAcaraSidang'])->middleware('cekstatus:dosen');
Route::get('/dosen/lembar_kendali/{nim}', [DosenController::class, 'lembar_kendali'])->middleware('cekstatus:dosen');
Route::get('/dosen/lembar_kendali_sempro/{nim}', [DosenController::class, 'lembar_kendali_sempro'])->middleware('cekstatus:dosen');
Route::get('/dosen/lembar_kendali_semhas/{nim}', [DosenController::class, 'lembar_kendali_semhas'])->middleware('cekstatus:dosen');
Route::get('/dosen/lembar_kendali_sidang/{nim}', [DosenController::class, 'lembar_kendali_sidang'])->middleware('cekstatus:dosen');

Route::get('/dosen/search', [DosenController::class, 'search_mhs_lulus'])->middleware('cekstatus:dosen')->name('search_mhs');
Route::get('/dosen/search_aktif', [DosenController::class, 'search_mhs_aktif'])->middleware('cekstatus:dosen')->name('search_mhs_aktif');
Route::get('/dosen/filter', [DosenController::class, 'filter'])->middleware('cekstatus:dosen')->name('filter');

// view dosbing input nilai
Route::get('/dosen/v_nilai_uji_program', [DosenController::class, 'v_nilai_uji_program'])->middleware('cekstatus:dosen')->name('v_nilai_uji_program');
Route::get('/dosen/v_nilai_semhas', [DosenController::class, 'v_nilai_semhas'])->middleware('cekstatus:dosen')->name('v_nilai_semhas');
Route::get('/dosen/v_nilai_sidang', [DosenController::class, 'v_nilai_sidang'])->middleware('cekstatus:dosen')->name('v_nilai_sidang');

// store dosbing input nilai
Route::post('/dosen/store_nilai_uji_program', [DosenController::class, 'store_nilai_uji_program'])->middleware('cekstatus:dosen')->name('store_nilai_uji_program');
Route::post('/dosen/store_nilai_semhas', [DosenController::class, 'store_nilai_semhas'])->middleware('cekstatus:dosen')->name('store_nilai_semhas');
Route::post('/dosen/store_nilai_sidang', [DosenController::class, 'store_nilai_sidang'])->middleware('cekstatus:dosen')->name('store_nilai_sidang');


// END ROUTES FOR DOSEN


// ROUTES FOR KAPRODI
Route::get('/prodi/dashboard', [KaprodiController::class, 'index'])->middleware('cekstatus:prodi');
Route::get('/prodi/menu_mahasiswa', [KaprodiController::class, 'menu_mahasiswa'])->middleware('cekstatus:prodi');
Route::get('/prodi/menu_mahasiswa/mahasiswa_aktif', [KaprodiController::class, 'mahasiswa_aktif'])->middleware('cekstatus:prodi');
Route::get('/prodi/menu_mahasiswa/mahasiswa_aktif/search', [KaprodiController::class, 'cari_mahasiswa'])->middleware('cekstatus:prodi');
Route::get('/prodi/menu_mahasiswa/mahasiswa_alumni', [KaprodiController::class, 'mahasiswa_alumni'])->middleware('cekstatus:prodi');
Route::get('/prodi/menu_mahasiswa/mahasiswa_alumni/search', [KaprodiController::class, 'cari_alumni'])->middleware('cekstatus:prodi');
Route::get('/prodi/hasil_filter', [KaprodiController::class, 'filter'])->middleware('cekstatus:prodi')->name('filter_mhs_prodi');
Route::get('/prodi/hasil_filter_progress_skripsi', [KaprodiController::class, 'filter2'])->middleware('cekstatus:prodi')->name('filter_mhs2_prodi');

// Route::get('/kaprodi/mahasiswa/{nim}',[KaprodiController::class, 'tampil'])->middleware('cekstatus:kaprodi');
Route::get('/prodi/beritaacara', [KaprodiController::class, 'berita_acara'])->middleware('cekstatus:prodi');
Route::get('/prodi/beritaacara/sempro', [KaprodiController::class, 'berita_acaraSempro'])->middleware('cekstatus:prodi');
Route::get('/prodi/beritaacara/sempro/{nim}', [KaprodiController::class, 'berita_acara_sempro'])->middleware('cekstatus:prodi');
Route::get('/prodi/beritaacara/semhas', [KaprodiController::class, 'berita_acaraSemhas'])->middleware('cekstatus:prodi');
Route::get('/prodi/beritaacara/semhas/{nim}', [KaprodiController::class, 'berita_acara_semhas'])->middleware('cekstatus:prodi');
Route::get('/prodi/beritaacara/mejahijau', [KaprodiController::class, 'berita_acaraMejahijau'])->middleware('cekstatus:prodi');
Route::get('/prodi/beritaacara/mejahijau/{nim}', [KaprodiController::class, 'berita_acara_mejahijau'])->middleware('cekstatus:prodi');

Route::get('/prodi/undangan_daftar_peserta', [KaprodiController::class, 'undangan_daftar_peserta'])->middleware('cekstatus:prodi');
Route::get('/prodi/undangan_daftar_peserta/seminar_proposal', [KaprodiController::class, 'daftar_sempro'])->middleware('cekstatus:prodi');
Route::get('/prodi/undangan_daftar_peserta/undangan_seminar_proposal/{tanggal}', [KaprodiController::class, 'undangan_sempro'])->middleware('cekstatus:prodi');
Route::get('/prodi/undangan_daftar_peserta/peserta_seminar_proposal/{tanggal}', [KaprodiController::class, 'peserta_sempro'])->middleware('cekstatus:prodi');

Route::get('/prodi/undangan_daftar_peserta/seminar_hasil', [KaprodiController::class, 'daftar_semhas'])->middleware('cekstatus:prodi');
Route::get('/prodi/undangan_daftar_peserta/undangan_seminar_hasil/{tanggal}', [KaprodiController::class, 'undangan_semhas'])->middleware('cekstatus:prodi');
Route::get('/prodi/undangan_daftar_peserta/peserta_seminar_hasil/{tanggal}', [KaprodiController::class, 'peserta_semhas'])->middleware('cekstatus:prodi');

Route::get('/prodi/undangan_daftar_peserta/sidang_meja_hijau', [KaprodiController::class, 'daftar_sidang'])->middleware('cekstatus:prodi');
Route::get('/prodi/undangan_daftar_peserta/undangan_sidang_meja_hijau/{tanggal}', [KaprodiController::class, 'undangan_sidang'])->middleware('cekstatus:prodi');
Route::get('/prodi/undangan_daftar_peserta/peserta_sidang_meja_hijau/{tanggal}', [KaprodiController::class, 'peserta_sidang'])->middleware('cekstatus:prodi');

Route::get('/prodi/lembar_kendali/{nim}', [KaprodiController::class, 'lembar_kendali'])->middleware('cekstatus:prodi');
Route::get('/prodi/lembar_kendali_sempro/{nim}', [KaprodiController::class, 'lembar_kendali_sempro'])->middleware('cekstatus:prodi');
Route::get('/prodi/lembar_kendali_semhas/{nim}', [KaprodiController::class, 'lembar_kendali_semhas'])->middleware('cekstatus:prodi');
Route::get('/prodi/lembar_kendali_sidang/{nim}', [KaprodiController::class, 'lembar_kendali_sidang'])->middleware('cekstatus:prodi');

//routes for penilaian
Route::get('/prodi/input_nilai', [KaprodiController::class, 'input_nilai'])->middleware('cekstatus:prodi')->name('input_nilai');
Route::get('/prodi/daftar_nilai_uji_program', [KaprodiController::class, 'daftar_nilai_uji_program'])->middleware('cekstatus:prodi')->name('nilai_uji_program');
Route::get('/prodi/add_nilai_uji_program', [KaprodiController::class, 'add_nilai_uji_program'])->middleware('cekstatus:prodi')->name('add_nilai_uji_program');
Route::post('/prodi/store_nilai_uji_program', [KaprodiController::class, 'store_nilai_program'])->middleware('cekstatus:prodi')->name('store_nilai_program');
Route::get('/prodi/edit_nilai_uji_program', [KaprodiController::class, 'edit_nilai_uji_program'])->middleware('cekstatus:prodi')->name('edit_nilai_uji_program');
Route::post('/prodi/store_upd_nilai_uji_program', [KaprodiController::class, 'store_upd_nilai_uji_program'])->middleware('cekstatus:prodi')->name('store_upd_nilai_program');
Route::post('/prodi/delete_nilai_uji_program', [KaprodiController::class, 'delete_nilai_uji_program'])->middleware('cekstatus:prodi')->name('delete_nilai_uji_program');

Route::get('/prodi/daftar_nilai_IPK', [KaprodiController::class, 'daftar_nilai_IPK'])->middleware('cekstatus:prodi')->name('nilai_IPK');
Route::get('/prodi/add_nilai_IPK', [KaprodiController::class, 'add_nilai_IPK'])->middleware('cekstatus:prodi')->name('add_nilai_IPK');
Route::post('/prodi/store_nilai_IPK', [KaprodiController::class, 'store_nilai_IPK'])->middleware('cekstatus:prodi')->name('store_nilai_IPK');
Route::get('/prodi/edit_nilai_IPK', [KaprodiController::class, 'edit_nilai_IPK'])->middleware('cekstatus:prodi')->name('edit_nilai_IPK');
Route::post('/prodi/store_upd_nilai_IPK', [KaprodiController::class, 'store_upd_nilai_IPK'])->middleware('cekstatus:prodi')->name('store_upd_nilai_IPK');
Route::post('/prodi/delete_nilai_IPK', [KaprodiController::class, 'delete_nilai_IPK'])->middleware('cekstatus:prodi')->name('delete_nilai_IPK');

Route::get('/prodi/daftar_nilai_semhas', [KaprodiController::class, 'daftar_nilai_semhas'])->middleware('cekstatus:prodi')->name('nilai_semhas');
Route::get('/prodi/add_nilai_semhas', [KaprodiController::class, 'add_nilai_semhas'])->middleware('cekstatus:prodi')->name('add_nilai_semhas');
Route::post('/prodi/store_nilai_semhas', [KaprodiController::class, 'store_nilai_semhas'])->middleware('cekstatus:prodi')->name('store_nilai_semhas');
Route::get('/prodi/edit_nilai_semhas', [KaprodiController::class, 'edit_nilai_semhas'])->middleware('cekstatus:prodi')->name('edit_nilai_semhas');
Route::post('/prodi/store_upd_nilai_semhas', [KaprodiController::class, 'store_upd_nilai_semhas'])->middleware('cekstatus:prodi')->name('store_upd_nilai_semhas');
Route::post('/prodi/delete_nilai_semhas', [KaprodiController::class, 'delete_nilai_semhas'])->middleware('cekstatus:prodi')->name('delete_nilai_semhas');

Route::get('/prodi/daftar_nilai_sidang', [KaprodiController::class, 'daftar_nilai_sidang_meja_hijau'])->middleware('cekstatus:prodi')->name('nilai_sidang');
Route::get('/prodi/add_nilai_sidang', [KaprodiController::class, 'add_nilai_sidang'])->middleware('cekstatus:prodi')->name('add_nilai_sidang');
Route::post('/prodi/store_nilai_sidang', [KaprodiController::class, 'store_nilai_sidang'])->middleware('cekstatus:prodi')->name('store_nilai_sidang');
Route::get('/prodi/edit_nilai_sidang', [KaprodiController::class, 'edit_nilai_sidang'])->middleware('cekstatus:prodi')->name('edit_nilai_sidang');
Route::post('/prodi/store_upd_nilai_sidang', [KaprodiController::class, 'store_upd_nilai_sidang'])->middleware('cekstatus:prodi')->name('store_upd_nilai_sidang');
Route::post('/prodi/delete_nilai_sidang', [KaprodiController::class, 'delete_nilai_sidang'])->middleware('cekstatus:prodi')->name('delete_nilai_sidang');
//end routes for penilaian
// END ROUTES FOR KAPRODI