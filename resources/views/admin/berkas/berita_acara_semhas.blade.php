<?php use Carbon\Carbon ?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Berita Acara Seminar Hasil - Form 2F</title>
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
			text-align: left;
			font-size: 13px;
			padding-left: 10px;
			padding-bottom: 30px;
		}
		table tr .padis {
			text-align: center;
			font-size: 13px;
			padding-top: 10px;
			padding-bottom: 10px;
		}
		table tr .kirs {
			font-size: 13px;
			padding-top: 15px;
			padding-bottom: 15px;
			padding-left: 10px;
		}
		table tr .ungu {
			text-align: left;
			font-size: 13px;
			padding-top: 5px;
			padding-bottom: 5px;
			padding-left: 10px;
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
			padding-left: 28px;
			
		}
		tr .aku {
			padding-left: 10px;
			border-bottom-style: hidden;
		}
		.none {
			border-bottom-style: hidden;
			border-right-style: hidden;
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
							<td class="text"><font size="3"><b>BERITA ACARA SEMINAR HASIL</b></font></td>
						</tr>
					</table>
					</table><br>
					<div>
						<table width="625" border="1" class="skrt">
							<tr>
								<td colspan="2" width="450" class="text"><b>Mahasiswa</b></td>
								<td colspan="2" width="500" class="pads">Hari / Tanggal : {{Carbon::parse($mahasiswa[0]->tanggal_semhas)->translatedFormat('l / d F Y')}}</td>
							</tr>
							<tr>
								<td colspan="2" width="450" class="pads">Nama &nbsp {{$mahasiswa[0]->nama}}</td>
								<td colspan="2" width="500" class="pads">Waktu : {{Carbon::createFromFormat('H:i:s', $mahasiswa[0]->waktu)->format('H:i')}} WIB</td>
							</tr>
							<tr>
								<td colspan="2" width="450" class="pads">NIM {{$mahasiswa[0]->nim}}</td>
								<td colspan="2" width="500" class="pads">Bidang Tugas Akhir : {{$mahasiswa[0]->bidang_TA}}</td>
							</tr>
							<tr>
								<td colspan="4" class="padi">Judul Tugas Akhir : {{$mahasiswa[0]->judul_skripsi}}</td>
							</tr>
							<tr>
								<td colspan="2" width="450" class="text"><b>Pembimbing</b></td>
								<td colspan="2" width="500" class="text"><b>Pembanding</b></td>
							</tr>
							<tr>
								<td colspan="1" width="50" class="pads">Nama</td>
								<td colspan="1" width="400" class="pads">{{$mahasiswa[0]->nama_dosen}}</td>
								<td colspan="1" width="50" class="pads">Nama</td>
								<td colspan="1" width="450" class="pads">{{$mahasiswa[0]->nama_dosen_penguji1}}</td>
							</tr>
							<tr>
								<td colspan="1" width="50" class="pads">NIP</td>
								<td colspan="1" width="400" class="pads">{{$mahasiswa[0]->nip}}</td>
								<td colspan="1" width="50" class="pads">NIP</td>
								<td colspan="1" width="450" class="pads">{{$mahasiswa[0]->nip_dosen_penguji1}}</td>
							</tr>
							<tr>
								<td colspan="1" width="50" class="pads">Nama</td>
								<td colspan="1" width="400" class="pads">{{$mahasiswa[1]->nama_dosen}}</td>
								<td colspan="1" width="50" class="pads">Nama</td>
								<td colspan="1" width="450" class="pads">{{$mahasiswa[0]->nama_dosen_penguji2}}</td>
							</tr>
							<tr>
								<td colspan="1" width="50" class="pads">NIP</td>
								<td colspan="1" width="400" class="pads">{{$mahasiswa[1]->nip}}</td>
								<td colspan="1" width="50" class="pads">NIP</td>
								<td colspan="1" width="450" class="pads">{{$mahasiswa[0]->nip_dosen_penguji2}}</td>
							</tr>
						</table>
						<br><br>
						<table width="625" border="1" class="skrt">
							<tr>
								<td width="40" class="padis"><b>No.</b></td>
								<td width="500" class="padis"><b>Nama Dosen</b></td>
								<td width="200" class="padis"><b>Nilai Angka</b></td>
								<td width="200" class="padis"><b>Tanda Tangan</b></td>
							</tr>
					@if($mahasiswa[0]->total != NULL)
						<?php $j = 1 ?>
						<?php $i ?>
						<?php $total = 0 ?>
						@for($i = 0; $i<=count($mahasiswa)-1; $i+=2)
							<tr>
								<td width="40" class="padis">{{$j}}</td>
								<td width="500" class="ungu">{{$mahasiswa[$i]->nama}}</td>
								<td width="200" class="ungu"><center>{{$mahasiswa[$i]->total}}</center></td>
								<td width="200" class="ungu"></td>
							</tr>
						<?php $total += $mahasiswa[$i]->total?>
						<?php $j++ ?>
						@endfor
						<?php $rata_rata = $total/4 ?>
							<tr>
								<td width="40" class="kirs"></td>
								<td width="500" class="kirs">NILAI SEMINAR HASIL*</td>
								<td width="200" class="kirs"><center>{{$rata_rata}}</center></td>
								<td width="200" class="none"></td>
							</tr>
					@else
						<?php $a ?>
						<?php $b=1 ?>
						@for($a = 1; $a<= 4; $a++)
							<tr>
								<td width="40" class="padis">{{$b}}</td>
								<td width="500" class="ungu"></td>
								<td width="200" class="ungu"></td>
								<td width="200" class="ungu"></td>
							</tr>
						<?php $b++;?>
						@endfor
						<tr>
							<td width="40" class="kirs"></td>
							<td width="500" class="kirs">NILAI SEMINAR HASIL*</td>
							<td width="200" class="kirs"></td>
							<td width="200" class="none"></td>
						</tr>
					@endif
						</table><br>
						<table width="625">
							<tr>
								<td><i>* Nilai seminar hasil adalah rata-rata dari nilai yang diberikan oleh seluruh dosen</i></td>
							</tr>
						</table>
					</div>
					<div>
						<br><br>
						<table width="625">
							<tr>
								<td width="40"></td>
								<td width="410"></td>
								<td width="180"></td>
								<td width="260">Medan, {{Carbon::parse($mahasiswa[0]->tanggal_semhas)->translatedFormat('d F Y')}}</td>
							</tr>
							<tr>
								<td width="40"></td>
								<td width="410"></td>
								<td width="180"></td>
								<td width="260" class="kiris">Ketua Program Studi,</td>
							</tr>
						</table>
						<br><br><br>
						<table width="625">
							<tr>
								<td width="40"></td>
								<td width="410"></td>
								<td width="180"></td>
								<td width="230">(Sarah Purnamawati, S.T., M.Sc)</td>
							</tr>
							<tr>
								<td width="40"></td>
								<td width="410"></td>
								<td width="180"></td>
								<td width="230">NIP. 198302262010122003</td>
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