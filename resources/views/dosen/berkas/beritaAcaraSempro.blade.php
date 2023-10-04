<!DOCTYPE html>
<html>
<head>
	<title>Form Berita Acara Seminar Proposal - Form 2B-1</title>
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
			padding-left: 28px;
			
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
				<td class="text"><font size="3"><b>BERITA ACARA SEMINAR PROPOSAL</b></font></td>
			</tr>
		</table>
		</table>
		<div>
			<table width="625" border="1" class="skrt">
				<tr>
					<td colspan="2" width="450" class="text"><b>Mahasiswa</b></td>
					<td colspan="3" width="550" class="pads">Hari / Tanggal :</td>
				</tr>
				<tr>
					<td colspan="2" width="450" class="pads">Nama :&nbsp {{$mahasiswa->nama}}</td>
					<td colspan="3" width="550" class="pads">Waktu :</td>
				</tr>
				<tr>
					<td colspan="2" width="450" class="pads">NIM &nbsp&nbsp: &nbsp {{$mahasiswa->nim}}</td>
                @foreach($skripsi as $index => $tes)
					<td colspan="3" width="550" class="pads">Bidang Tugas Akhir : {{$tes->bidang_ilmu}}</td>
				</tr>
				<tr>
					<td colspan="2" width="450" class="text"><b>Pembimbing</b></td>
					<td colspan="3" width="550" class="aku">Judul Tugas Akhir : {{$tes->judul_skripsi}}</td>
				</tr>
                @endforeach
                @foreach($query as $index => $dosen)
				<tr>
					<td colspan="1" width="40" class="pads">Nama</td>
					<td colspan="1" width="410" class="pads">{{$dosen->nama}}</td>
				</tr>
				<tr>
					<td colspan="1" width="40" class="pads">NIP</td>
					<td colspan="1" width="410" class="pads">{{$dosen->nip}}</td>
                </tr>
                @endforeach
				<tr>
					<td colspan="5" class="padi"><font size="2">HASIL SEMINAR PROPOSAL</font><br></td>
				</tr>
				<tr>
					<td width="40" class="ungu"><b>No.</b></td>
					<td width="410" class="ungu"><b>Nama Dosen</b></td>
					<td width="180" class="ungu"><b>Layak</b></td>
					<td width="180" class="ungu"><b>Tidak Layak</b></td>
					<td width="180" class="ungu"><b>Tanda Tangan</b></td>
				</tr>
				<tr>
					<td width="40" class="ungu">1</td>
					<td width="410" class="kiri"></td>
					<td width="180" class="ungu"></td>
					<td width="180" class="ungu"></td>
					<td width="180" class="ungu"></td>
				</tr>
				<tr>
					<td width="40" class="ungu">2</td>
					<td width="410" class="kiri"></td>
					<td width="180" class="ungu"></td>
					<td width="180" class="ungu"></td>
					<td width="180" class="ungu"></td>
				</tr>
				<tr>
					<td width="40" class="ungu">3</td>
					<td width="410" class="kiri"></td>
					<td width="180" class="ungu"></td>
					<td width="180" class="ungu"></td>
					<td width="180" class="ungu"></td>
				</tr>
				<tr>
					<td width="40" class="ungu">4</td>
					<td width="410" class="kiri"></td>
					<td width="180" class="ungu"></td>
					<td width="180" class="ungu"></td>
					<td width="180" class="ungu"></td>
				</tr>
				<tr>
					<td width="40" class="ungu">5</td>
					<td width="410" class="kiri"></td>
					<td width="180" class="ungu"></td>
					<td width="180" class="ungu"></td>
					<td width="180" class="ungu"></td>
				</tr>
				<tr>
					<td width="40" class="ungu">6</td>
					<td width="410" class="kiri"></td>
					<td width="180" class="ungu"></td>
					<td width="180" class="ungu"></td>
					<td width="180" class="ungu"></td>
				</tr>
				<tr>
					<td width="40" class="ungu">7</td>
					<td width="410" class="kiri"></td>
					<td width="180" class="ungu"></td>
					<td width="180" class="ungu"></td>
					<td width="180" class="ungu"></td>
				</tr>
				<tr>
					<td width="40" class="ungu">8</td>
					<td width="410" class="kiri"></td>
					<td width="180" class="ungu"></td>
					<td width="180" class="ungu"></td>
					<td width="180" class="ungu"></td>
				</tr>
			</table>
		</div>
		<div>
			
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
			<br><br>
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