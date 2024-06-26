<?php
// Koeneksi Database 
$koneksi = mysqli_connect("localhost", "root", "", "belajarphp");

// Fungsi untuk menambil data dari database
function query($query) {
	global $koneksi;
	$result = mysqli_query($koneksi, $query);
	$rows = [];
	while ($mhs = mysqli_fetch_assoc($result)) {
		$rows[] = $mhs;
	}
	return $rows;
}
