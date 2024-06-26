<<?php  
$servername = "localhost"; // Ganti dengan nama server Anda
$username = "root";        // Ganti dengan username database Anda
$password = "";            // Ganti dengan password database Anda
$dbname = "belajarphp"; // Ganti dengan nama database Anda

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Fungsi tambah data dosen
function tambah($data) {
    global $conn;
    $nama_dosen = htmlspecialchars($data["nama_dosen"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $tlp = htmlspecialchars($data["tlp"]);
    $gelar = htmlspecialchars($data["gelar"]);
    $email = htmlspecialchars($data["email"]);

    $query = "INSERT INTO dosen (nama_dosen, alamat, tlp, gelar, email) 
              VALUES ('$nama_dosen', '$alamat', '$tlp', '$gelar', '$email')";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>