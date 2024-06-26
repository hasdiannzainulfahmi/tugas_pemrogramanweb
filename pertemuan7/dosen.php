<?php

require 'conf/conf.php';

$dosen = query("SELECT * FROM dosen");
?>
<?php include "header.php";?>
<h1>Data Dosen </h1>
<table border="1">
	<tr>
		<th>NO</th>
		<th>NIDN</th>
		<th>Nama</th>
		<th><a href="form.php">Tambah Data</a></th>
	</tr>
	<?php $no=1;  foreach ($dosen as $row) {?>
	<tr>
		<td><?= $no++;?></td>
		<td><?= $row["nidn"];?></td>
		<td><?= $row["nama"];?></td>
		<td><a href="ubah.php?id=<?= $row["nidn"]; ?>">Edit</a>| <a href="hapus.php?id=<?= $row["nidn"]; ?>">Hapus</a></td>
	</tr>
<?php } ?>
</table>
<?php include "footer.php";?>