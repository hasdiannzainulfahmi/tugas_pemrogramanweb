<?php

// Penggunaaan Array Asosiatif untuk menampilkan data 
// mahaiswa 
$mahasiswa = [
	[
		"nim" => "TI16190020",
		"nama"=> "Samsul Hadi", 
		"jurusan" => "Teknik Informatika", 
		"email" => "samsulhadi@gmail.com",
		"gambar" => "samsul.jpg"
	],
	[
		"nim" => "TI16190011", 
		"nama"=> "Januardi Putra", 
		"jurusan" => "Teknik Informatika", 
		"email" => "januardiputra@gmail.com",
		"gambar" => "januardi.jpg"
	],
	[
		"nim" => "TI16190025", 
		"nama" => "M. Izzudin", 
		"jurusan" => "", 
		"email" => "m-izzudin@gmail.com",
		"gambar" => "izzudin.jpg"
	]
];

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
	</tr>
	<?php $no=1;  foreach ($mahasiswa as $mhs) {?>
	<tr>
		<td><?= $no++;?></td>
		<td>
			<a href="latihan2.php?nim=<?= $mhs["nim"]; ?>&nama=<?= $mhs["nama"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&email=<?= $mhs["email"]; ?>&gambar=<?= $mhs["gambar"]; ?>">
				<?= $mhs["nim"];?>
			</a>
		</td>
		<td><?= $mhs["nama"];?></td>
		<td><?= $mhs["jurusan"];?></td>
		<td><?= $mhs["email"];?></td>
	</tr>
<?php } ?>
</body>
</html>
