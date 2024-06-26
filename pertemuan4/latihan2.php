<?php 

// Cek apakah tidak ada data di $_GET
if(!isset($_GET["nim"]) || !isset($_GET["nama"]) ||
   !isset($_GET["jurusan"]) || !isset($_GET["email"]) ||
   !isset($_GET["gambar"])){

	// kembali ke halaman latihan1.php
	header("Location: latihan1.php");
	exit;
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Profil Mahasiswa</title>
</head>
<body>
<h1>Profil Mahasiswa</h1>


<img src="img/<?= $_GET['gambar'];?>" width="200px"> 

<ul>
	<li>NIM : <?= $_GET['nim'];?> </li>
	<li>Nama : <?= $_GET['nama'];?> </li>
	<li>Jurusan : <?= $_GET['jurusan'];?> </li>
	<li>Email : <?= $_GET['email'];?> </li>
</ul>
</body>
</html>