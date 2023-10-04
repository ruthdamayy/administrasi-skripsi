<!DOCTYPE html>
<html>
<head>
	<title>Form Validasi Berkas Mahasiswa - Form 3A</title>
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
			text-align: left;
			font-size: 13px;
			padding-top: 10px;
			padding-bottom: 10px;
			padding-left: 5px;
		}
		table tr .text4 {
			text-align: center;
			font-size: 13px;
			padding-top: 10px;
			padding-bottom: 10px;
		}
		table tr td {
			font-size: 13px;
		}
		.skrt {
			border: 1px solid black;
  			border-collapse: collapse;
		}
		.pads {
			padding-bottom: 741px;
		}
		.padss {
			padding-bottom: 704px;
		}
		.padsss {
			padding-bottom: 593px;
		}
		
		

	</style>
</head>
<body>
	<div class="main-page">
		<div class="sub-page">
			<div>
				<center>
					<table width="500">
						<tr>
							<td class="text"><font size="3"><b><u>FORM VALIDASI BERKAS MAHASISWA</u></b></font></td>
						</tr>
						<tr>
							<td class="text"><font size="3"><b><u>SEBAGAI PERSYARATAN SEMINAR PROPOSAL</u></b></font></td>
						</tr>
					</table><br>
					<table width="500">
						<tr>
							<td style="padding-right: 80px;">Nama</td>
							<td width="572">:  {{$mahasiswa->nama}}</td>
						</tr>
						<tr>
							<td>NIM</td>
							<td width="572">:   {{$mahasiswa->nim}}</td>
						</tr>
						<tr>
							<td>Program Studi</td>
							<td width="572">:  S1 Teknologi Informasi</td>
						</tr>
					</table><br>
					<table width="500" border="1" class="skrt">
						<tr>
							<td width="20" class="text4"><font size="2">No.</font></td>
							<td width="400" class="text4"><font size="2">BERKAS</font></td>
							<td width="80" class="text4"><font size="2">PETUGAS</font></td>
						</tr>
						<tr>
							<td class="text">1</td>
							<td class="text3">Fotokopi KRS/KHS mahasiswa (awal-akhir/berjalan)</td>
							<td></td>
						</tr>
						<tr>
							<td class="text">2</td>
							<td class="text3">Fotokopi tanda lunas SPP awal-SPP akhir (semester berjalan)</td>
							<td></td>
						</tr>
						<tr>
							<td class="text">3</td>
							<td class="text3">Lembar kendali Pra-Seminar Proposal (Form 1-A)</td>
							<td></td>
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
					<table width="500">
						<tr>
							<td class="text"><font size="3"><b><u>FORM VALIDASI BERKAS MAHASISWA</u></b></font></td>
						</tr>
						<tr>
							<td class="text"><font size="3"><b><u>SEBAGAI PERSYARATAN SEMINAR HASIL</u></b></font></td>
						</tr>
					</table><br>
					<table width="500">
						<tr>
							<td style="padding-right: 80px;">Nama</td>
							<td width="572">:  {{$mahasiswa->nama}}</td>
						</tr>
						<tr>
							<td>NIM</td>
							<td width="572">:   {{$mahasiswa->nim}}</td>
						</tr>
						<tr>
							<td>Program Studi</td>
							<td width="572">:  S1 Teknologi Informasi</td>
						</tr>
					</table><br>
					<table width="500" border="1" class="skrt">
						<tr>
							<td width="20" class="text4"><font size="2">No.</font></td>
							<td width="400" class="text4"><font size="2">BERKAS</font></td>
							<td width="80" class="text4"><font size="2">PETUGAS</font></td>
						</tr>
						<tr>
							<td class="text">1</td>
							<td class="text3">Fotokopi KRS/KHS mahasiswa (awal-akhir/berjalan)</td>
							<td></td>
						</tr>
						<tr>
							<td class="text">2</td>
							<td class="text3">Fotokopi SK dosen pembimbing skripsi</td>
							<td></td>
						</tr>
						<tr>
							<td class="text">3</td>
							<td class="text3">Fotokopi tanda lunas SPP awal-SPP akhir (semester berjalan)</td>
							<td></td>
						</tr>
						<tr>
							<td class="text">4</td>
							<td class="text3">Lembar kendali Pra-Seminar Hasil (Form 1-B)</td>
							<td></td>
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
					<table width="500">
						<tr>
							<td class="text"><font size="3"><b><u>FORM VALIDASI BERKAS MAHASISWA</u></b></font></td>
						</tr>
						<tr>
							<td class="text"><font size="3"><b><u>SEBAGAI PERSYARATAN SIDANG MEJA HIJAU</u></b></font></td>
						</tr>
					</table><br>
					<table width="500">
						<tr>
							<td style="padding-right: 80px;">Nama</td>
							<td width="572">:  {{$mahasiswa->nama}}</td>
						</tr>
						<tr>
							<td>NIM</td>
							<td width="572">:   {{$mahasiswa->nim}}</td>
						</tr>
						<tr>
							<td>Program Studi</td>
							<td width="572">:  S1 Teknologi Informasi</td>
						</tr>
					</table><br>
					<table width="500" border="1" class="skrt">
						<tr>
							<td width="20" class="text4"><font size="2">No.</font></td>
							<td width="400" class="text4"><font size="2">BERKAS</font></td>
							<td width="80" class="text4"><font size="2">PETUGAS</font></td>
						</tr>
						<tr>
							<td class="text">1</td>
							<td class="text3">Buku bimbingan skripsi</td>
							<td></td>
						</tr>
						<tr>
							<td class="text">2</td>
							<td class="text3">Kartu Kemajuan Mahasiswa</td>
							<td></td>
						</tr>
						<tr>
							<td class="text">3</td>
							<td class="text3">Lembar kendali Pra-Sidang Meja Hijau (Form 1-C)</td>
							<td></td>
						</tr>
						<tr>
							<td class="text">4</td>
							<td class="text3">Draf jurnal</td>
							<td></td>
						</tr>
						<tr>
							<td class="text">5</td>
							<td class="text3">Fotokopi KRS dan KHS semester awal-akhir</td>
							<td></td>
						</tr>
						<tr>
							<td class="text">6</td>
							<td class="text3">Fotokopi slip SPP Awal sampai Akhir</td>
							<td></td>
						</tr>
						<tr>
							<td class="text">7</td>
							<td class="text3">SK dosen pembimbing</td>
							<td></td>
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
					<table width="500">
						<tr>
							<td class="text"><font size="3"><b><u>FORM VALIDASI BERKAS MAHASISWA</u></b></font></td>
						</tr>
						<tr>
							<td class="text"><font size="3"><b><u>SEBAGAI PERSYARATAN PENGGANDAAN SKRIPSI</u></b></font></td>
						</tr>
					</table><br>
					<table width="500">
						<tr>
							<td style="padding-right: 80px;">Nama</td>
							<td width="572">:  {{$mahasiswa->nama}}</td>
						</tr>
						<tr>
							<td>NIM</td>
							<td width="572">:   {{$mahasiswa->nim}}</td>
						</tr>
						<tr>
							<td>Program Studi</td>
							<td width="572">:  S1 Teknologi Informasi</td>
						</tr>
					</table><br>
					<table width="500" border="1" class="skrt">
						<tr>
							<td width="20" class="text4"><font size="2">No.</font></td>
							<td width="400" class="text4"><font size="2">BERKAS</font></td>
							<td width="80" class="text4"><font size="2">PETUGAS</font></td>
						</tr>
						<tr>
							<td class="text">1</td>
							<td class="text3">CD skripsi + kode sumber aplikasi + jurnal</td>
							<td></td>
						</tr>
						<tr>
							<td class="text">2</td>
							<td class="text3">Form persetujuan penggandaan skripsi</td>
							<td></td>
						</tr>
						<tr>
							<td class="text">3</td>
							<td class="text3">Fotokopi bebas pustaka USU dan Fasilkom-TI = 1 lembar</td>
							<td></td>
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