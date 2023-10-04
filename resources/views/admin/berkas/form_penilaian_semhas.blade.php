<?php use Carbon\Carbon ?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Penilaian Seminar Hasil - Form 2E</title>
	<style type="text/css">
		body {
			width: 230mm;
			height: 100%;
			margin: 0 auto;
			padding: 0;
			font-size: 12pt;
			background: rgb(204,204,204); 
		}
     * 	{
			box-sizing: border-box;
			-moz-box-sizing: border-box;
     	}
		.main-page {
			width: 210mm;
			min-height: 297mm;
			margin: 10mm auto;
			background: white;
			box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
		}
		.sub-page {
		padding: 1cm;
		height: 297mm;
		}
		@page {
		size: A4;
		margin: 0;
		}
		@media print {
		html, body {
			width: 210mm;
			height: 297mm;        
		}
		.main-page {
			margin: 0;
			border: initial;
			border-radius: initial;
			width: initial;
			min-height: initial;
			box-shadow: initial;
			background: initial;
			page-break-after: always;
		}
     	}
		table {
			border-style: solid;
			border-width: 3px;
			border-color: white;
		}
		table tr .text2 {
			text-align: right;
			font-size: 13px;
		}
		table tr .text {
			text-align: center;
			font-size: 13px;
		}
		table tr .text3 {
			text-align: center;
			font-size: 13px;
			padding-bottom: 50px;
		}
		table tr .text4 {
			text-align: justify;
			font-size: 13px;
		}
		table tr .text5 {
			text-align: center;
			font-size: 13px;
		}
		table tr .text6 {
			text-align: justify;
			padding-left: -2px;
			padding-right: 25px;
			padding-top: -5px;
			padding-bottom: 5px;
			font-size: 13px;
		}
		table tr .text7 {
			text-align: center;
			padding-left: 8px;
			font-size: 13px;
			padding-top: 7px;
			padding-bottom: 7px;
		}
		table tr .text8 {
			text-align: center;
			font-size: 13px;
			padding-top: 10px;
			padding-bottom: 10px;
		}
		table tr .text9 {
			text-align: center;
			font-size: 13px;
			padding-top: 15px;
			vertical-align: top;
		}
		table tr td {
			font-size: 13px;
		}
		.skrt {
			border: 1px solid black;
  			border-collapse: collapse;
		}
		.pads {
			padding-left: 8px;
		}
		.pads2 {
			padding-left: 25px;
		}
		.padi{
			padding-left: 65px;
		}
		hr.line {
			border: 2px solid black;
		}
		.kiris {
			padding-left: 20px;
			line-height: 0.8;
		}
		.ket {
			line-height: 0.8;
			padding-left: 8px;
		}
		.kets {
			line-height: 0.8;
		}
		.batas {
			padding-bottom: 93px;
		}
		.ttd {
			padding-top: 60px;
		}

	</style>
</head>
<body>
	<div class="main-page">
		<div class="sub-page">
			<div>
				<center>
					<table width="625">
						<tr>
							<td style="padding-right: 15px;"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/90/Logo_of_North_Sumatra_University.svg/400px-Logo_of_North_Sumatra_University.svg.png" width="110" height="110"></td>
							<td>
							<center>
								<font size="4">KEMENTERIAN PENDIDIKAN, KEBUDAYAAN, RISET, <br> DAN TEKNOLOGI</font><br>
								<font size="3">UNIVERSITAS SUMATERA UTARA<br> FAKULTAS ILMU KOMPUTER DAN TEKNOLOGI INFORMASI</font><br>
								<font size="3"><b>PROGRAM STUDI S1 TEKNOLOGI INFORMASI</b></font><br>
								<font size="2">Jalan Alumni No. 3 Gedung C, Kampus USU Padang Bulan, Medan 20155</font><br>
								<font size="2">Telepon/Fax: 061-8210077 | Email: tek.informasi@usu.ac.id | Laman: http://it.usu.ac.id</font>
							</center>
							</td>
						</tr>
						<tr>
							<td colspan="2"><hr class="line"></td>
						</tr>
					<table width="625">
						<tr>
							<td class="text"><font size="3"><b>FORM PENILAIAN SEMINAR HASIL</b></font></td>
						</tr>
					</table>
					</table>
					<table width="625">
						<br><tr>
							<td style="padding-right: 70px;">Nama</td>
							<td width="572">:  {{$query->nama}}</td>
						</tr>
						<tr>
							<td>NIM</td>
							<td width="572">:  {{$query->nim}}</td>
						</tr>
						<tr>
							<td>Judul Skripsi</td>
							<td width="572">:  {{$query->judul_skripsi}}</td>
						</tr>
						<tr>
						</tr>
					</table>
					<br>
					<table width="625" border="1" class="skrt">
						<tr>
							<td width="20" class="text5"><b>No.</b></td>
							<td width="200" class="text5"><b>Kriteria Penilaian</b></td>
							<td width="30" class="text5"><b>Bobot</b></td>
							<td width="40" class="text5"><b>Nilai Angka</b></td>
						</tr>
						<tr>
							<td width="20" class="text">1</td>
							<td width="200" class="text5"><b>Abstrak</b></td>
							<td width="30" class="text5"></td>
							<td width="40" class="text5"></td>
						</tr>
						<tr>
							<td width="20" class="text"></td>
							<td width="200" class="text6">
								<ul>
									<li>Abstrak memiliki unsur rumusan masalah</li>
									<li>Abstrak memiliki unsur metodologi</li>
									<li>Abstrak memiliki unsur hasil penelitian</li>
									<li>Abstrak memiliki unsur kesimpulan</li>
									<li>Bahasa Inggris di dalam abstrak sudah sesuai dengan Bahasa Indonesia di dalam abstrak dan kaidah Bahasa Inggris yang benar</li>
									<li>Kata kunci mewakili isi dari tugas akhir</li>
								</ul>
							</td>
							<td width="30" class="text9">0 - 3</td>
							<td width="40" class="text6"><center>{{$query->n1}}</center></td>
						</tr>
						<tr>
							<td width="20" class="text">2</td>
							<td width="200" class="text5"><b>Bab I - Pendahuluan</b></td>
							<td width="30" class="text5"></td>
							<td width="40" class="text5"></td>
						</tr>
						<tr>
							<td width="20" class="text"></td>
							<td width="200" class="text6">
								<ul>
									<li>Rumusan masalah adalah masalah yang terjadi di dunia nyata atau masalah yang terdapat di bidang ilmu pengetahuan tersebut</li>
									<li>Tujuan penelitian yang ditulis mampu menyelesaikan rumusan masalah</li>
									<li>Batasan masalah relevan dengan penelitian</li>
									<li>Hubungan latar belakang dengan rumusan masalah</li>
									<li>Batasan masalah berisi batasan penelitian yang dilakukan</li>
								</ul>
							</td>
							<td width="30" class="text9">0 - 10</td>
							<td width="40" class="text6"><center>{{$query->n2}}</center></td>
						</tr>
						<tr>
							<td width="20" class="text">3</td>
							<td width="200" class="text5"><b>Bab II - Landasan Teori</b></td>
							<td width="30" class="text5"></td>
							<td width="40" class="text5"></td>
						</tr>
						<tr>
							<td width="20" class="text"></td>
							<td width="200" class="text6">
								<ul>
									<li>Landasan teori membahas hal-hal spesifik yang berhubungan dengan metodologi</li>
									<li>Setiap kutipan termasuk gambar dan tabel yang tidak dibuat oleh penulis harus memiliki referensi</li>
									<li>Referensi yang diletakkan di skripsi tercantum di daftar pustaka</li>
									<li>Jurnal internasional dimasukkan di dalam daftar pustaka (minimal 2 artikel)</li>
									<li>Paper konferensi internasional dimasukkan di dalam daftar pustaka (minimal 5 artikel)</li>
									<li>Penelitian terdahulu yang berhubungan dengan topik penelitian (minimal 5 penelitian terdahulu)</li>
									<li>Tulisan di dalam landasan teori tidak mengandung unsur copy paste dari referensi yang dikutip (tulisan yang dikutip harus membentuk kalimat baru)</li>
								</ul>
							</td>
							<td width="30" class="text9">0 - 15</td>
							<td width="40" class="text6"><center>{{$query->n3}}</center></td>
						</tr>
					</table>
				</center>
			</div>
		</div>
	</div>

	<div class="main-page">
		<div class="sub-page">
			<div>
				<center>
					<table width="625">
						<tr>
							<td style="padding-right: 15px;"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/90/Logo_of_North_Sumatra_University.svg/400px-Logo_of_North_Sumatra_University.svg.png" width="110" height="110"></td>
							<td>
							<center>
								<font size="4">KEMENTERIAN PENDIDIKAN, KEBUDAYAAN, RISET, <br> DAN TEKNOLOGI</font><br>
								<font size="3">UNIVERSITAS SUMATERA UTARA<br> FAKULTAS ILMU KOMPUTER DAN TEKNOLOGI INFORMASI</font><br>
								<font size="3"><b>PROGRAM STUDI S1 TEKNOLOGI INFORMASI</b></font><br>
								<font size="2">Jalan Alumni No. 3 Gedung C, Kampus USU Padang Bulan, Medan 20155</font><br>
								<font size="2">Telepon/Fax: 061-8210077 | Email: tek.informasi@usu.ac.id | Laman: http://it.usu.ac.id</font>
							</center>
							</td>
						</tr>
						<tr>
							<td colspan="2"><hr class="line"></td>
						</tr>
					</table>
					<br>
					<table width="625" border="1" class="skrt">
						<tr>
							<td width="20" class="text5"><b>No.</b></td>
							<td width="200" class="text5"><b>Kriteria Penilaian</b></td>
							<td width="30" class="text5"><b>Bobot</b></td>
							<td width="40" class="text5"><b>Nilai Angka</b></td>
						</tr>
						<tr>
							<td width="20" class="text">4</td>
							<td width="200" class="text5"><b>Bab III - Metodologi</b></td>
							<td width="30" class="text5"></td>
							<td width="40" class="text5"></td>
						</tr>
						<tr>
							<td width="20" class="text"></td>
							<td width="200" class="text6">
								<ul>
									<li>Kesesuaian metodologi penelitian dengan penyelesaian permasalahan</li>
									<li>Arsitektur umum menggambarkan keseluruhan metode dan strategi yang diterapkan di tugas akhir</li>
									<li>Arsitektur umum dijelaskan secara terperinci dan detail</li>
									<li>Pemahaman metodologi penelitian</li>
								</ul>
							</td>
							<td width="30" class="text9">0 - 25</td>
							<td width="40" class="text6"><center>{{$query->n4}}</center></td>
						</tr>
						<tr>
							<td width="20" class="text">5</td>
							<td width="200" class="text5"><b>Bab IV - Implementasi</b></td>
							<td width="30" class="text5"></td>
							<td width="40" class="text5"></td>
						</tr>
						<tr>
							<td width="20" class="text"></td>
							<td width="200" class="text6">
								<ul>
									<li>Kesesuaian implementasi dengan metodologi penelitian</li>
									<li>Screenshot/gambar yang dibuat menunjukkan isi dari penelitian</li>
									<li>Pengujian penelitian sesuai dengan metode yang digunakan</li>
									<li>Setiap gambar dan tabel memiliki penjelasan mengenai isi dari gambar dan tabel tersebut</li>
									<li>Pembahasan harus sampai pada tahap kenapa hasil yang didapat bisa seperti yang dipaparkan</li>
								</ul>
							</td>
							<td width="30" class="text9">0 - 35</td>
							<td width="40" class="text6"><center>{{$query->n5}}</center></td>
						</tr>
						<tr>
							<td width="20" class="text">6</td>
							<td width="200" class="text5"><b>Bab V - Kesimpulan</b></td>
							<td width="30" class="text5"></td>
							<td width="40" class="text5"></td>
						</tr>
						<tr>
							<td width="20" class="text"></td>
							<td width="200" class="text6">
								<ul>
									<li>Kesimpulan merepresentasikan hasil yang didapat</li>
									<li>Saran merepresentasikan kelemahan dari hasil yang sudah didapat</li>
								</ul>
							</td>
							<td width="30" class="text9">0 - 2</td>
							<td width="40" class="text6"><center>{{$query->n6}}</center></td>
						</tr>
						<tr>
							<td width="20" class="text">7</td>
							<td width="200" class="text6">
								<ul>
									<li>Kemampuan mengemukakan substansi dan pendapat dan sikap</li>
								</ul>
							</td>
							<td width="30" class="text9">0 -10</td>
							<td width="40" class="text6"><center>{{$query->n7}}</center></td>
						</tr>
						<tr>
							<td width="20" class="text"></td>
							<td width="200" class="pads2"><b>TOTAL NILAI</b></td>
							<td width="30" class="text8"><b><center>{!! $total = $query->n1 + $query->n2 + $query->n3 + $query->n4 + $query->n5 + $query->n6 + $query->n7 !!}</center></b></td>
							<td width="40" class="text6"></td>
						</tr>
					</table><br><br>
					<table width="625">
						<tr>
							<td width="410" class="pads"><b>Kategori Nilai</b></td>
							<td width="180"></td>
							<td width="180"></td>
							<td width="200">Medan, {{Carbon::parse($query->tanggal_semhas)->translatedFormat('d F Y')}}</td>
						</tr>
						<tr>
							<td width="410" class="ket"><b>80 - 100 = A</b></td>
							<td width="180"></td>
							<td width="180"></td>
							<td width="200" class="kiris">Pembimbing/Pembanding</td>
						</tr>
						<tr>
							<td width="410" class="ket"><b>75 - 79 = B+</b></td>
							<td width="180"></td>
							<td width="180"></td>
							<td width="200"></td>
						</tr>
						<tr>
							<td width="410" class="ket"><b>70 - 74 = B</b></td>
							<td width="180"></td>
							<td width="180"></td>
							<td width="200"></td>
						</tr>
						<tr>
							<td width="410" class="ket"><b>65 - 69 = C+</b></td>
							<td width="180"></td>
							<td width="180"></td>
							<td width="200"></td>
						</tr>
						<tr>
							<td width="410" class="ket"><b>60 - 64 = C</b></td>
							<td width="180"></td>
							<td width="180"></td>
							<td width="200"></td>
						</tr>
						<tr>
							<td width="410" class="ket"><b>50 - 59 = D</b></td>
							<td width="180"></td>
							<td width="180"></td>
							<td width="200">({{$query->nama_dosen}})</td>
						</tr>
						<tr>
							<td width="410" class="ket"><b>0 - 49 = E</b></td>
							<td width="180"></td>
							<td width="180"></td>
							<td width="200" class="kets">NIP. {{$query->nip}}</td>
						</tr>
					</table>
				</center>
			</div>
		</div>
	</div>
</body>
<script>
	window.print();
</script>
</html>
