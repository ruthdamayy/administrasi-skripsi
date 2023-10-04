<!DOCTYPE html>
<html>
<head>
	<title>Form Berita Acara Seminar Hasil - Form 2F</title>
	<style type="text/css">
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
	<center>
		<table width="625">
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
					<td colspan="2" width="500" class="pads">Hari / Tanggal :</td>
				</tr>
				<tr>
					<td colspan="2" width="450" class="pads">Nama :&nbsp {{$mahasiswa->nama}}</td>
					<td colspan="2" width="500" class="pads">Waktu :</td>
				</tr>
				<tr>
					<td colspan="2" width="450" class="pads">NIM &nbsp&nbsp: &nbsp {{$mahasiswa->nim}}</td>
                @foreach($skripsi as $index => $tes)
					<td colspan="2" width="500" class="pads">Bidang Tugas Akhir : {{$tes->bidang_ilmu}}</td>
				</tr>
				<tr>
					<td colspan="4" class="padi">Judul Tugas Akhir : {{$tes->judul_skripsi}}</td>
				</tr>
                @endforeach
                @foreach($query as $index => $dosen)
				<tr>
					<td colspan="2" width="450" class="text"><b>Pembimbing</b></td>
				</tr>
				<tr>
					<td colspan="1" width="50" class="pads">Nama</td>
					<td colspan="1" width="400" class="pads">{{$dosen->nama}}</td>
				</tr>
				<tr>
					<td colspan="1" width="50" class="pads">NIP</td>
					<td colspan="1" width="400" class="pads">{{$dosen->nip}}</td>
				</tr>
                @endforeach
			</table>
			<br><br>
			<table width="625" border="1" class="skrt">
				<tr>
					<td width="40" class="padis"><b>No.</b></td>
					<td width="500" class="padis"><b>Nama Dosen</b></td>
					<td width="200" class="padis"><b>Nilai Angka</b></td>
					<td width="200" class="padis"><b>Tanda Tangan</b></td>
				</tr>
				<tr>
					<td width="40" class="padis">1</td>
					<td width="500" class="ungu"></td>
					<td width="200" class="ungu"></td>
					<td width="200" class="ungu"></td>
				</tr>
				<tr>
					<td width="40" class="padis">2</td>
					<td width="500" class="ungu"></td>
					<td width="200" class="ungu"></td>
					<td width="200" class="ungu"></td>
				</tr>
				<tr>
					<td width="40" class="padis">3</td>
					<td width="500" class="ungu"></td>
					<td width="200" class="ungu"></td>
					<td width="200" class="ungu"></td>
				</tr>
				<tr>
					<td width="40" class="padis">4</td>
					<td width="500" class="ungu"></td>
					<td width="200" class="ungu"></td>
					<td width="200" class="ungu"></td>
				</tr>
				<tr>
					<td width="40" class="kirs"></td>
					<td width="500" class="kirs">NILAI SEMINAR HASIL*</td>
					<td width="200" class="kirs"></td>
					<td width="200" class="none"></td>
				</tr>
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
					<td width="260">Medan, ......................................</td>
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
					<td width="260">(..................................................)</td>
				</tr>
				<tr>
					<td width="40"></td>
					<td width="410"></td>
					<td width="180"></td>
					<td width="260">NIP.</td>
				</tr>
			</table>
		</div>
	</center>

    <script>
		window.print();
	</script>
</body>
</html>