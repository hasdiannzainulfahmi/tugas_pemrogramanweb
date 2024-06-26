<?php

require 'conf/conf.php';

$mahasiswa = query("SELECT * FROM mahasiswa");
?>
<?php include "header.php";?>
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
</table>
<?php include "footer.php";?>