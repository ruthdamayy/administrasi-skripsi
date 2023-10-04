<!DOCTYPE html>
<html>
<head>
	<!-- <title>Contoh Surat</title> -->
	<style type="text/css">
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
		

	</style>
</head>
<body>
	<center>
		<table>
			<tr>
				<td style="padding-right: 15px;"><img src="{{asset('storage/Logo.png')}}" width="110" height="110"></td>
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
				<td colspan="2"><hr></td>
			</tr>
		<table width="625">
			<tr>
				<td class="text"><font size="3"><b>FORM PERSETUJUAN SEMINAR HASIL</b></font></td>
			</tr>
		</table>
		</table>
		<table width="625">
			<br>
			<tr>
				<td style="padding-right: 70px;">Nama</td>
				<td width="572">:  {{$mahasiswa->nama}}</td>
			</tr>
			<tr>
				<td>NIM</td>
				<td width="572">:  {{$mahasiswa->nim}}</td>
			</tr>
			<tr>
				<td>Program Studi</td>
				<td width="572">:  Teknologi Informasi</td>
			</tr>
			@foreach($skripsi as $index => $tes)
			<tr>
				<td>Judul Skripsi</td>
				<td width="572">: {{ $tes->judul_skripsi }}</td>
			</tr>
			@endforeach
		</table>
		<br>
		<table width="625">
			<tr>
				<td style="padding-right: 33px;">Hari/Tanggal</td>
				<td width="572">:  ..............................................................</td>
			</tr>
			<tr>
				<td>Pukul</td>
				<td width="572">:  ..............................................................</td>
			</tr>
		</table>
		<table width="625">
			<tr>
				<td>Telah memenuhi persyaratan dan disetujui untuk <b>Seminar Hasil</b>.</td>
			</tr>
		</table>
		<br>
		@foreach ($query as $index => $dosen)
		<table width="625">
			<tr>
				<td><b>Pembimbing {{ ++$index }}</b></td>
			</tr>
		</table>
		<table width="625">
			<tr>
				<td style="padding-right: 70px;">Nama</td>
				<td width="572">:  {{ $dosen->nama }}</td>
				<td width="572">{{ $index++ }}</td>
			</tr>
			<tr>
				<td style="padding-right: 70px;">NIP</td>
				<td width="572">:  {{ $dosen->nip }}</td>
			</tr>
		</table>
		@endforeach
	</center>

	<script>
		window.print();
	</script>
</body>
</html>