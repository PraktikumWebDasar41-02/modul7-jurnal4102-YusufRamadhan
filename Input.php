<!DOCTYPE html>
<html>
<head>
	<title>Input Data</title>
</head>
<body>
	<center>
		<br><br>
		<h3>Input Data</h3>
		<table>
			<form method="POST">
				<tr>
					<td>NIM</td>
					<td>:</td>
					<td><input type="text" name="NIM"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="Nama"></td>
				</tr>
				<tr>
					<td>Tanggal Lahir</td>
					<td>:</td>
					<td><input type="date" name="Tanggal"></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<td>
						<select name ="JK">
							<option value="Laki-Laki">Laki - Laki</option>
							<option value="Perempuan">Perempuan</option>
							<option value="Lainnya">Lainnya</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Program Studi</td>
					<td>:</td>
					<td>
						<select name ="Prodi">
							<option value = "D3 Manajemen Informatika">D3 Manajemen Informatika</option>
							<option value = "S1 MBTI">S1 MBTI</option>
							<option value = "S1 Sistem Informasi">S1 Sistem Informasi</option>
							<option value = "S1 DKV">S1 DKV</option>
						</select>
					</td>
				</tr>
				<tr>
					<td valign="top">Fakultas</td>
					<td valign="top">:</td>
					<td>
						<input type="Radio" name="Fakultas" value="Fakultas Ilmu Terapan" checked="yes">Fakultas Ilmu Terapan<br>
						<input type="Radio" name="Fakultas" value="Fakultas Ekonomi Bisnis">Fakultas Ekonomi Bisnis<br>
						<input type="Radio" name="Fakultas" value="Fakultas Rekayasa Industri">Fakultas Rekayasa Industri<br>
						<input type="Radio" name="Fakultas" value="Fakultas Industri Kreatif">Fakultas Industri Kreatif
					</td>
				</tr>
				<tr>
					<td>Asal</td>
					<td>:</td>
					<td><input type="text" name="Asal"></td>
				</tr>
				<tr>
					<td>Motto Hidup</td>
					<td>:</td>
					<td><textarea name ="Motto" placeholder="Masukkan motto hidup disini..."></textarea></td>
				</tr>
				<tr>
					<td colspan="3"><center><input type="submit" name="submit"></center></td>
				</tr>
			</form>
		</table>
	</center>
</body>
</html>

<?php 
	$db = mysqli_connect('localhost','root','','mahasiswa');
	
	if (!$db) {
		die("Connection Failed :".mysqli_connect_error());
	}

	if (isset($_POST['submit'])) {
		$NIM = $_POST['NIM'];
		$Nama = $_POST['Nama'];
		$TGL = $_POST['Tanggal'];
		$JK = $_POST['JK'];
		$Prodi = $_POST['Prodi'];
		$Fakultas = $_POST['Fakultas'];
		$Asal = $_POST['Asal'];
		$Motto = $_POST['Motto'];

		$insert = "INSERT INTO data(NIM, Nama, Tanggal_Lahir, Jenis_Kelamin, Program_Studi, Fakultas, Asal, Moto_Hidup) VALUES('$NIM','$Nama','$TGL','$JK','$Prodi','$Fakultas','$Asal','$Motto')";

		if ($NIM == is_numeric($NIM) && strlen($NIM) == 10) {
			if (mysqli_query($db,$insert)) {
				echo "<script language = 'javascript'>alert('Data telah disimpan');document.location=('home.php');</script>";
			}else{
				echo "<script language = 'javascript'>alert('Data gagal disimpan');document.location=('Input.php');</script>";
			}
		}else{
				echo "<script language = 'javascript'>alert('NIM harus angka dan 10 digit');document.location=('Input.php');</script>";
		}	
	}
?>