<?php use Carbon\Carbon ?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Penilaian Sidang Meja Hijau - Form 2H</title>
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
			padding-top: 15px;
			padding-bottom: 15px;
		}
		table tr .text6 {
			padding-left: 8px;
			font-size: 13px;
			padding-top: 7px;
			padding-bottom: 7px;
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
			padding-top: 7px;
			padding-bottom: 7px;
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
		.padi{
			padding-left: 65px;
		}
		hr.line {
		border: 2px solid black;
		}
		.kiris {
			padding-left: 63px;
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
			padding-bottom: 360px;
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
							<td class="text"><font size="3"><b>FORM PENILAIAN SIDANG MEJA HIJAU</b></font></td>
						</tr>
					</table>
					</table>
					<table width="625">
						<br><tr>
							<td style="padding-right: 70px;">Nama</td>
							<td width="572">:  {{$query[0]->nama}}</td>
						</tr>
						<tr>
							<td>NIM</td>
							<td width="572">:  {{$query[0]->nim}}</td>
						</tr>
						<tr>
							<td>Judul Skripsi</td>
							<td width="572">:  {{$query[0]->judul_skripsi}}</td>
						</tr>
					</table>
					<br>
					<table width="625" border="1" class="skrt">
						<tr>
							<td width="20" class="text5"><b>No.</b></td>
							<td width="200" class="text5"><b>Kriteria Penilaian Sidang Meja Hijau</b></td>
							<td width="50" class="text5"><b>Bobot</b></td>
							<td width="60" class="text5"><b>Nilai Angka</b></td>
						</tr>
						<tr>
							<td width="20" class="text">1</td>
							<td width="200" class="text6">Sistematika penulisan</td>
							<td width="50" class="text7">1-25</td>
							<td width="60" class="text6">{{$query[0]->n1}}</td>
						</tr>
						<tr>
							<td width="20" class="text">2</td>
							<td width="200" class="text6">Substansi</td>
							<td width="50" class="text7">1-25</td>
							<td width="60" class="text6">{{$query[0]->n2}}</td>
						</tr>
						<tr>
							<td width="20" class="text">3</td>
							<td width="200" class="text6">Kemampuan menguasai substansi</td>
							<td width="50" class="text7">1-25</td>
							<td width="60" class="text6">{{$query[0]->n3}}</td>
						</tr>
						<tr>
							<td width="20" class="text">4</td>
							<td width="200" class="text6">Kemampuan mengemukakan pendapat</td>
							<td width="50" class="text7">1-25</td>
							<td width="60" class="text6">{{$query[0]->n4}}</td>
						</tr>
						<tr>
							<td width="20" class="text"></td>
							<td width="200" colspan="2" class="text6">TOTAL NILAI</td>
							<td width="60" class="text6">{{$query[0]->total}}</td>
						</tr>
					</table><br><br>
					<table width="625">
						<tr>
							<td width="410" class="pads"><b>Kategori Nilai</b></td>
							<td width="180"></td>
							<td width="180"></td>
							<td width="200">Medan, {{Carbon::parse($query[0]->tanggal_sidang)->translatedFormat('d F Y')}}</td>
						</tr>
						<tr>
							<td width="410" class="ket"><b>80 - 100 = A</b></td>
							<td width="180"></td>
							<td width="180"></td>
							<td width="200" class="kiris">Penguji</td>
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
							<td width="200">({{$query[0]->nama_penguji}})</td>
						</tr>
						<tr>
							<td width="410" class="ket"><b>0 - 49 = E</b></td>
							<td width="180"></td>
							<td width="180"></td>
							<td width="200" class="kets">NIP. {{$query[0]->nip}}</td>
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
					<table width="625">
						<tr>
							<td class="text"><font size="3"><b>LAMPIRAN BORANG PENILAIAN SIDANG MEJA HIJAU</b></font></td>
						</tr>
					</table>
					</table>
					<table width="625">
						<br><tr>
							<td style="padding-right: 70px;">Nama</td>
							<td width="572">:  {{$query[0]->nama}}</td>
						</tr>
						<tr>
							<td>NIM</td>
							<td width="572">:  {{$query[0]->nim}}</td>
						</tr>
						<tr>
							<td>Judul Skripsi</td>
							<td width="572">:  {{$query[0]->judul_skripsi}}</td>
						</tr>
						<tr>
							<td></td>
							<td width="572">:  .........................................................................................................................................................</td>
						</tr>
					</table>
					<br>
					<table width="625" border="1" class="skrt">
						<tr>
							<td width="20" class="text8"><b>No.</b></td>
							<td width="330" class="text7"><b>Daftar Pertanyaan</b></td>
						</tr>
						<tr>
							<td width="20" class="text">1</td>
							<td width="330" class="text6"></td>
						</tr>
						<tr>
							<td width="20" class="text">2</td>
							<td width="330" class="text6"></td>
						</tr>
						<tr>
							<td width="20" class="text">3</td>
							<td width="330" class="text6"></td>
						</tr>
						<tr>
							<td width="20" class="text">4</td>
							<td width="330" class="text6"></td>
						</tr>
						<tr>
							<td width="20" class="text">5</td>
							<td width="330" class="text6"></td>
						</tr>
						<tr>
							<td width="20" class="text">6</td>
							<td width="330" class="text6"></td>
						</tr>
						<tr>
							<td width="20" class="text">7</td>
							<td width="330" class="text6"></td>
						</tr>
						<tr>
							<td width="20" class="text">8</td>
							<td width="330" class="text6"></td>
						</tr>
						<tr>
							<td width="20" class="text">9</td>
							<td width="330" class="text6"></td>
						</tr>
						<tr>
							<td width="20" class="text">10</td>
							<td width="330" class="text6"></td>
						</tr>
					</table><br><br>
					<table width="625">
						<tr>
							<td width="410"></td>
							<td width="180"></td>
							<td width="180"></td>
							<td width="200">Medan, {{Carbon::parse($query[0]->tanggal_sidang)->translatedFormat('d F Y')}}</td>
						</tr>
						<tr>
							<td width="410"></td>
							<td width="180"></td>
							<td width="180"></td>
							<td width="200" class="kiris">Penguji</td>
						</tr>
						<tr>
							<td width="410"></td>
							<td width="180"></td>
							<td width="180"></td>
							<td width="200" class="ttd">({{$query[0]->nama_penguji}})</td>
						</tr>
						<tr>
							<td width="410"></td>
							<td width="180"></td>
							<td width="180"></td>
							<td width="200">NIP. {{$query[0]->nip}}</td>
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