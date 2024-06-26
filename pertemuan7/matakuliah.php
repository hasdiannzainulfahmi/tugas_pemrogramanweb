<?php

require 'conf/conf.php';

$makul = query("SELECT * FROM makul");
?>
<?php include "header.php";?>
<h1>Data Dosen </h1>
<table border="1">
	<tr>
		<th>NO</th>
		<th>KDMK</th>
		<th>Matakuliah</th>
		<th>SKS</th>
		<th><a href="form.php">Tambah Data</a></th>
	</tr>
	<?php $no=1;  foreach ($makul as $row) {?>
	<tr>
		<td><?= $no++;?></td>
		<td><?= $row["kdmk"];?></td>
		<td><?= $row["makul"];?></td>
		<td><?= $row["sks"];?></td>
		<td><a href="ubah.php?id=<?= $row["kdmk"]; ?>">Edit</a>| <a href="hapus.php?id=<?= $row["kdmk"]; ?>">Hapus</a></td>
	</tr>
<?php } ?>
</table>
<?php include "footer.php";?>