<?php 
//Menmanggil file confing
require 'config.php';
// cek status tombol apakah sudah di tekan 
if(isset($_POST["submit"])){
	// menambahkan fungsi untuk menyimpan data dengan fungsi tambah yang sdh dibuat di config.php
	if(tambah($_POST) > 0){
		echo "
			<script>
				alert('Data berhasil di simpan');
				document.location.href= 'latihan.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('Data gagal di simpan');
				document.location.href= 'latihan.php';
			</script>
		";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Mahasiswa</title>
</head>
<body>

	<h1>Form Mahasiswa</h1>
	<form action="" method="POST">
NIM * : <input type="text" name="nim" required><br>
Nama * : <input type="text" name="nama" required><br>
Jurusan: <select name="jurusan">
			<option>Pilih Jurusan</option>
			<option value="Teknik Informatika">Teknik Informatika</option>
			<option value="Sistem Informasi">Sistem Informasi</option>
		</select>
				<br>
Email : <input type="text" name="email"><br>
<input type="submit" value="Simpan" name="submit"><br>

	</form>
</body>
</html>