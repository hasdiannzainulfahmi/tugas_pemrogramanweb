<?php

require 'conf/conf.php';

$makul = query("SELECT a.nim,a.nama as nama_mhs, b.nama, c.makul, d.uts, d.uas, d.ruangan, d.tahunajaran FROM mahasiswa a, dosen b, makul c, krs d WHERE a.nim = d.nim AND b.nidn = d.nidn and c.kdmk = d.kdmk");
?>
<?php include "header.php";?>
<h1>Data KRS Mahasiswa </h1>
<table border="1">
	<tr>
		<th>NO</th>
		<th>NIM</th>
		<th>Nama</th>
		<th>Dosen</th>
		<th>Mata Kuliah</th>
		<th>Nilai UTS</th>
		<th>Nilai UAS</th>
		<th>Ruangan</th>
		<th>Tahun Ajaran</th>
		<th><a href="form.php">Tambah Data</a></th>
	</tr>
	<?php $no=1;  foreach ($makul as $row) {?>
	<tr>
		<td><?= $no++;?></td>
		<td><?= $row["nim"];?></td>
		<td><?= $row["nama_mhs"];?></td>
		<td><?= $row["nama"];?></td>
		<td><?= $row["makul"];?></td>
		<td><?= $row["uts"];?></td>
		<td><?= $row["uas"];?></td>
		<td><?= $row["ruangan"];?></td>
		<td><?= $row["tahunajaran"];?></td>
		<td><a href="ubah.php?id=<?= $row["nim"]; ?>">Edit</a>| <a href="hapus.php?id=<?= $row["nim"]; ?>">Hapus</a></td>
	</tr>
<?php } ?>
</table>
<?php include "footer.php";?>