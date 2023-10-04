<!DOCTYPE html>
<html>
<head>
	<title>Kata Pengantar Sidang - Form 2J</title>
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
		table tr .text3 {
			text-align: justify;
			font-size: 13px;
			line-height: 1.7;
		}
		table tr .text4 {
			font-size: 13px;
			line-height: 0.8;
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
							<td class="text"><font size="3"><b>KATA PEMBUKAAN</b></font></td>
						</tr>
						<tr>
							<td class="text"><font size="3"><b>UJIAN SARJANA LENGKAP</b></font></td>
						</tr>
					</table>
					</table><br>
					<table width="625">
						<tr>
							<td class="text3">Kami, atas nama Pemerintah Republik Indonesia, cq. Kementerian Pendidikan dan Kebudayaan, pada hari ini memanggil Saudara/i mahasiswa Program Studi Teknologi Informasi, Fasilkom-TI USU:</td>
						</tr>
					</table><br>
					<table width="625">
						<tr>
							<td style="padding-right: 80px;">Nama</td>
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
					</table><br>
					<table width="625">
						<tr>
							<td class="text3">Untuk diuji oleh Panitia, guna mendapatkan Ijazah Sarjana Komputer  dari Fasilkom-TI USU dan mengharapkan agar saudara memberikan jawaban-jawaban dari pertanyaan-pertanyaan yang diajukan kepada saudara secara tepat dan tidak berbelit-belit.
							</td>
						</tr>
					</table><br>
					<table width="625">
						<tr>
							<td class="text3">Dengan ini kami membuka ujian ini dengan resmi, -> (ketuk palu)… selanjutnya pelaksanaan ujian kami serahkan kepada Ketua Panitia Ujian.
							</td>
						</tr>
					</table><br><br>
					<table width="625">
						<tr>
							<td class="text3">Sekian dan Terima Kasih.
							</td>
						</tr>
					</table><br><br>
					<table width="625">
						<tr>
							<td width="180" class="text4">Keputusan Rektor</td>
							<td width="572" class="text4">:  No. 116/PT05/SK/Q.85</td>
						</tr>
						<tr>
							<td class="text4">1.   Memuaskan</td>
							<td class="text4">:  IPK 2,00 s/d 2,75</td>
						</tr>
						<tr>
							<td class="text4">2.   Sangat Memuaskan</td>
							<td class="text4">:  IPK 2,76 s/d 3,50</td>
						</tr>
						<tr>
							<td class="text4">3.   Cumlaude</td>
							<td class="text4">:  IPK 3,51 – 4,00 (dengan lama studi terjadwal</td>
						</tr>
						<tr>
							<td class="text4"></td>
							<td style="padding-left: 7px;" class="text4">ditambah 1 tahun [ n + 1 ] dan tidak ada nilai D)</td>
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