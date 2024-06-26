<?php
// Koeneksi Database 
$koneksi = mysqli_connect("localhost", "root", "", "belajarphp");

// Fungsi untuk menambil data dari Database
function query($query) {
	global $koneksi;
	$result = mysqli_query($koneksi, $query);
	$rows = [];
	while ($mhs = mysqli_fetch_assoc($result)) {
		$rows[] = $mhs;
	}
	return $rows;
}

function tambah($data){
	global $koneksi;

	$nim = htmlspecialchars($data['nim']);
	$nama = htmlspecialchars($data['nama']);
	$jurusan = htmlspecialchars($data['jurusan']);
	$email = htmlspecialchars($data['email']);

	$query = "INSERT INTO mahasiswa VALUES
				('','$nim','$nama','$email','$jurusan','')";
	mysqli_query($koneksi, $query);
	return mysqli_affected_rows($koneksi);
}

function hapus($id) {
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id = $id");
	return mysqli_affected_rows($koneksi);
}

function ubah($data){
	global $koneksi;

	$id = ($data['id']);
	$nim = ($data['nim']);
	$nama = ($data['nama']);
	$jurusan = ($data['jurusan']);
	$email = ($data['email']);

	$query = "UPDATE mahasiswa SET
				nim = '$nim',
				nama = '$nama',
				email = '$email',
				jurusan = '$jurusan'
				WHERE 
				id = $id";
	mysqli_query($koneksi, $query);
	return mysqli_affected_rows($koneksi);
}
function tambah_data_dosen($data){
	global $koneksi;

	$nama_dosen = htmlspecialchars($data['nama_dosen']);
	$alamat = htmlspecialchars($data['alamat']);
	$tlp = htmlspecialchars($data['tlp']);
	$gelar = htmlspecialchars($data['gelar']);
	$email = htmlspecialchars($data['email']);

	$query = "INSERT INTO dosen VALUES
				('','$nama_dosen','$alamat','$tlp','$gelar',$email','')";
	mysqli_query($koneksi, $query);
	return mysqli_affected_rows($koneksi);
}
