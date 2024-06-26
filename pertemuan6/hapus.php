<?php 
require 'config.php';

$id = $_GET["id"];

if( hapus($id) > 0 ) {
	echo "
		<script>
			alert('Data berhasil dihapus!');
			document.location.href = 'latihan.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('Data gagal ditambahkan!');
			document.location.href = 'latihan.php';
		</script>
	";
}

?>