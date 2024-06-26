<?php

require 'config.php';
// Koneksi Ke dalam database

//$koneksi = mysqli_connect("localhost", "root", "", "belajarphp");


// Tes Koneksi Ke dalam database
// if (!$koneksi){
// 	die("Konesi Gagal : ". mysqli_connect_error());
// }

// echo "Koneksi Berhasil";

// mengambil data 
// $mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa");

$mahasiswa = query("SELECT * FROM mahasiswa");

//ambil data (fetch) mahasiswa dari oject result 
// mysqli_fetch_row -> mengembalikan array numerik
// mysqli_fetch_assoc -> menembalikan array asosiativ
// mysqli_fetch_array -> menembalikan array menjadi array
// mysqli_fetch_object -> menembalikan array menjadi object

?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa </title>
</head>
<body>
<h1>Data Mahasiswa </h1>
<table border="1">
	<tr>
		<th>NO</th>
		<th>NIM</th>
		<th>Nama</th>
		<th>Jurusan</th>
		<th>Email</th>
		<th><a href="form.php">Tambah Data</a></th>
	</tr>
	<?php $no=1;  foreach ($mahasiswa as $row) {?>
	<tr>
		<td><?= $no++;?></td>
		<td>
			<a href="latihan2.php?nim=<?= $row["nim"]; ?>&nama=<?= $row["nama"]; ?>&jurusan=<?= $row["jurusan"]; ?>&email=<?= $row["email"]; ?>&gambar=<?= $row["gambar"]; ?>">
				<?= $row["nim"];?>
			</a>
		</td>
		<td><?= $row["nama"];?></td>
		<td><?= $row["jurusan"];?></td>
		<td><?= $row["email"];?></td>
		<td><a href="ubah.php?id=<?= $row["id"]; ?>">Edit</a>| <a href="hapus.php?id=<?= $row["id"]; ?>">Hapus</a></td>
	</tr>
<?php } ?>
</body>
</html>