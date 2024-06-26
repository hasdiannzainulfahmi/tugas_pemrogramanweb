<!DOCTYPE html>
<html>
<head>
	<title>File html </title>
</head>
<body>
<?php
$mahasiswa = [
["TI16190020", "Samsul Hadi", "Teknik Informatika", "samsulhadi@gmail.com"],
["TI16190011", "Januardi Putra", "Teknik Informatika", "januardiputra@gmail.com"],
["TI16190025", "M. Izzudin", "Teknik Informatika", "m-izzudin@gmail.com"],
["TI16190008", "Hartini", "Teknik Informatika", "hartini@gmail.com"],
["TI16190008", "Hartini", "Teknik Informatika", "hartini@gmail.com"],
["TI16190008", "Hartini", "Teknik Informatika", "hartini@gmail.com"],
["TI16190008", "Hartini", "Teknik Informatika", "hartini@gmail.com"],
["TI16190008", "Hartini", "Teknik Informatika", "hartini@gmail.com"],
["TI16190008", "Hartini", "Teknik Informatika", "hartini@gmail.com"],
["TI16190008", "Hartini", "Teknik Informatika", "hartini@gmail.com"],
["TI16190008", "Hartini", "Teknik Informatika", "hartini@gmail.com"],
["TI16190008", "Hartini", "Teknik Informatika", "hartini@gmail.com"],
];
?>
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
		<td><?= $mhs[0];?></td>
		<td><?= $mhs[1];?></td>
		<td><?= $mhs[2];?></td>
		<td><?= $mhs[3];?></td>
	</tr>
<?php } ?>
</table>
</body>
</html>