<?php use Carbon\Carbon ?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Penilaian Uji Program - Form 2C</title>
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
		table tr .padi {
			text-align: center;
			font-size: 13px;
			padding-top: 10px;
			padding-bottom: 10px;
		}
		table tr .ungu {
			text-align: center;
			font-size: 13px;
			padding-top: 5px;
			padding-bottom: 5px;
		}
		table tr .kiri {
			font-size: 13px;
			padding-top: 5px;
			padding-bottom: 5px;
			padding-left: 10px;
		}
		table tr td {
			font-size: 13px;
		}
		.skrt {
			border: 1px solid black;
  			border-collapse: collapse;
		}
		.pads {
			padding-left: 10px;
			
		}
		.kiris {
			padding-left: 40px;
			
		}
		tr .aku {
			padding-left: 10px;
			border-bottom-style: hidden;
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
							<td class="text"><font size="3"><b>FORM PENILAIAN UJI PROGRAM</b></font></td>
						</tr>
					</table>
					</table><br>
					<div>
						<table width="625" border="1" class="skrt">
							@if($query->tanggal != NULL)
							<tr>
								<td colspan="2" class="text"><b>Mahasiswa</b></td>
								<td colspan="2" class="pads">Hari / Tanggal : {{Carbon::parse($query->tanggal)->translatedFormat('l , d F Y')}}</td>
							</tr>
							@else
							<tr>
								<td colspan="2" class="text"><b>Mahasiswa</b></td>
								<td colspan="2" class="pads">Hari / Tanggal : </td>
							</tr>
							@endif
							<tr>
								<td colspan="2" class="pads">Nama {{$query->nama}}</td>
								<td colspan="2" class="pads">Waktu : {{date('H.i', strtotime($query -> waktu)) }} </td>
							</tr>
							<tr>
								<td colspan="2" class="pads">NIM {{$query->nim}}</td>
								<td colspan="2" class="pads">Bidang Ilmu : {{$query->bidang_ilmu}}</td>
							</tr>
							<tr>
								<td colspan="2" class="text"><b>Pembimbing</b></td>
								<td colspan="2" class="aku">Judul Skripsi : {{$query->judul_skripsi}}</td>
							</tr>
							<tr>
								<td class="pads" width="45">Nama</td>
								<td class="text" width="230">{{$query->nama_dosbing1}}</td>
								<td colspan="2" class="pads" rowspan="4"></td>
							</tr>
							<tr>
								<td class="pads" width="45">NIP</td>
								<td class="text" width="230">{{$query->nip_dosbing1}}</td>
							</tr>
							<tr>
								<td class="pads" width="45">Nama</td>
								<td class="text" width="230">{{$query->nama_dosbing2}}</td>
							</tr>
							<tr>
								<td class="pads" width="45">NIP</td>
								<td class="text" width="230">{{$query->nip_dosbing2}}</td>
							</tr>
							<tr>
								<td class="padi" colspan="4">HASIL PENILAIAN UJI PROGRAM</td>
							</tr>
							<tr>
								<td class="ungu"><b>No.</b></td>
								<td class="ungu" colspan="2" width="300"><b>Komponen Penilaian</b></td>
								<td class="ungu" width="150"><b>Nilai Angka</b></td>
							</tr>
							<tr>
								<td class="ungu">1</td>
								<td class="kiri" colspan="2" width="300">Kemampuan dasar pemrograman (0-40)</td>
								<td class="ungu" width="150">{{$query->n1}}</td>
							</tr>
							<tr>
								<td class="ungu">2</td>
								<td class="kiri" colspan="2" width="300">Kecocokan metode/algoritma dengan sintaks program (0-10)</td>
								<td class="ungu" width="150">{{$query->n2}}</td>
							</tr>
							<tr>
								<td class="ungu">3</td>
								<td class="kiri" colspan="2" width="300">Penguasaan pemrograman berdasarkan kasus pada skripsi (0-20)</td>
								<td class="ungu" width="150">{{$query->n3}}</td>
							</tr>
							<tr>
								<td class="ungu">4</td>
								<td class="kiri" colspan="2" width="300">Penguasaan pembuatan User Interface (0-10)</td>
								<td class="ungu" width="150">{{$query->n4}}</td>
							</tr>
							<tr>
								<td class="ungu">5</td>
								<td class="kiri" colspan="2" width="300">Validasi output program (0-20)</td>
								<td class="ungu" width="150">{{$query->n5}}</td>
							</tr>
							<tr>
								<td class="ungu"></td>
								<td class="ungu" colspan="2" width="300">NILAI UJI PROGRAM</td>
								<td class="ungu" width="150">{!! $total = $query->n1 + $query->n2 + $query->n3 + $query->n4 + $query->n5 !!}</td>
							</tr>
						</table>
					</div>
					<div>
						<br><br>
						<table width="625">
							<tr>
								<td width="50"></td>
								<td width="150" colspan="2"></td>
								<td width="190">Medan, {{Carbon::parse($query->tanggal)->translatedFormat('d F Y')}}</td>
							</tr>
							<tr>
								<td width="50"></td>
								<td width="150" colspan="2"></td>
								<td width="190" class="kiris">Pembimbing I/II,</td>
							</tr>
						</table>
						<br><br><br>
						<table width="625">
							<tr>
								<td width="50"></td>
								<td width="190" colspan="2"></td>
								<td width="190">({{$query->nama_dsn}})</td>
							</tr>
							<tr>
								<td width="50"></td>
								<td width="190" colspan="2"></td>
								<td width="190">NIP. {{$query->nip}}</td>
							</tr>
						</table>
					</div>
				</center>
			</div>
		</div>
	</div>
</body>
<script>
	window.print();
</script>
</html>