<?php
// Database connection
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'belajarphp'; // Replace with your database name

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Function to execute a query and return the result
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// Function to update lecturer data
function ubah($data) {
    global $conn;

    $id = $data["id"];
    $nama_dosen = htmlspecialchars($data["nama_dosen"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $tlp = htmlspecialchars($data["tlp"]);
    $gelar = htmlspecialchars($data["gelar"]);
    $email = htmlspecialchars($data["email"]);

    $query = "UPDATE dosen SET
                nama_dosen = '$nama_dosen',
                alamat = '$alamat',
                tlp = '$tlp',
                gelar = '$gelar',
                email = '$email'
              WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>