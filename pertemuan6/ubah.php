<?php 
//Menmanggil file confing
require 'config.php';

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

// cek status tombol apakah sudah di tekan 
if(isset($_POST["submit"])){
	// menambahkan fungsi untuk menyimpan data dengan fungsi ubah yang sdh dibuat di config.php
	if(ubah($_POST) > 0){
		echo "
			<script>
				alert('Data berhasil di ubah');
				document.location.href= 'latihan.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('Data gagal di ubah');
				document.location.href= 'latihan.php';
			</script>
		";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Ubah Mahasiswa</title>
</head>
<body>

	<h1>Form Ubah Mahasiswa</h1>
	<form action="" method="POST">
    <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
NIM : <input type="text" name="nim" value="<?= $mhs["nim"]; ?>"><br>
Nama : <input type="text" name="nama" value="<?= $mhs["nama"]; ?>"><br>
Jurusan: <select name="jurusan">
            <option value="<?= $mhs["jurusan"]; ?>"><?= $mhs["jurusan"]; ?></option>
			<option value="Teknik Informatika">Teknik Informatika</option>
			<option value="Sistem Informasi">Sistem Informasi</option>
		</select>
				<br>
Email : <input type="text" name="email" value="<?= $mhs["email"]; ?>"><br>
<input type="submit" value="Simpan" name="submit"><br>

	</form>
</body>
</html>