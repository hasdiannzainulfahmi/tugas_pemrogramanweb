<?php

// Koneksi ke dalam database
$koneksi = mysqli_connect("localhost", "root", "", "belajarphp");

// Fungsi untuk mengambil data dari Database
function query($query) {
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($mhs = mysqli_fetch_assoc($result)) {
        $rows[] = $mhs;
    }
    return $rows;
}
?>