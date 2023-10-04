<?php use Carbon\Carbon ?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Persetujuan Sidang Meja Hijau - Form 2G</title>
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
			border-style: double;
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
		table tr td {
			font-size: 13px;
		}
		hr.line {
		border: 2px solid black;
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
							<td class="text"><font size="3"><b>FORM PERSETUJUAN SIDANG MEJA HIJAU</b></font></td>
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
							<td>Program Studi</td>
							<td width="572">:  S1 Teknologi Informasi</td>
						</tr>
						<tr>
							<td>Judul Skripsi</td>
							<td width="572">:  {{$query[0]->judul_skripsi}}</td>
						</tr>
					</table>
					<br>
					<table width="625">
						<tr>
							<td style="padding-right: 33px;">Hari/Tanggal</td>
							<td width="572">:  {{Carbon::parse($query[0]->tanggal_sidang)->translatedFormat('l, d F Y')}}</td>
						</tr>
						<tr>
							<td>Pukul</td>
							<td width="572">:  {{Carbon::createFromFormat('H:i:s', $query[0]->waktu)->format('H:i')}} WIB</td>
						</tr>
					</table><br>
					<table width="625">
						<tr>
							<td>Telah memenuhi persyaratan dan disetujui untuk <b>Sidang Meja Hijau</b>.</td>
						</tr>
					</table>
					<br>
					<table width="625">
						<tr>
							<td><b>Pembimbing I</b></td>
						</tr>
					</table>
					<table width="625">
						<tr>
							<td style="padding-right: 70px;">Nama</td>
							<td width="572">:  {{$query[0]->nama_dosen}}</td>
							<td width="572"> 1.</td>
						</tr>
						<tr>
							<td style="padding-right: 70px;">NIP</td>
							<td width="572">:  {{$query[0]->nip}}</td>
						</tr>
					</table><br>
					<table width="625">
						<tr>
							<td><b>Pembimbing II</b></td>
						</tr>
					</table>
					<table width="625">
						<tr>
							<td style="padding-right: 70px;">Nama</td>
							<td width="572">:  {{$query[1]->nama_dosen}}</td>
							<td width="572"> 2.</td>
						</tr>
						<tr>
							<td style="padding-right: 70px;">NIP</td>
							<td width="572">:  {{$query[1]->nip}}</td>
						</tr>
					</table><br>
					<table width="625">
						<tr>
							<td><b>Pembanding I</b></td>
						</tr>
					</table>
					<table width="625">
						<tr>
							<td style="padding-right: 70px;">Nama</td>
							<td width="572">:  {{$query[0]->nama_dosen_penguji1}}</td>
							<td width="572"> 3.</td>
						</tr>
						<tr>
							<td style="padding-right: 70px;">NIP</td>
							<td width="572">:   {{$query[0]->nip_dosen_penguji1}}</td>
						</tr>
					</table><br>
					<table width="625">
						<tr>
							<td><b>Pembanding II</b></td>
						</tr>
					</table>
					<table width="625">
						<tr>
							<td style="padding-right: 70px;">Nama</td>
							<td width="572">:  {{$query[0]->nama_dosen_penguji2}}</td>
							<td width="572"> 4.</td>
						</tr>
						<tr>
							<td style="padding-right: 70px;">NIP</td>
							<td width="572">:  {{$query[0]->nip_dosen_penguji2}}</td>
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