<?php
// Memanggil file config
require 'conf.php';

// Cek apakah parameter id ada
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fungsi untuk menghapus data dosen berdasarkan id
    function hapus($id) {
        global $conn;
        $query = "DELETE FROM dosen WHERE id = $id";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }

    // Memanggil fungsi hapus dan memberikan feedback ke pengguna
    if (hapus($id) > 0) {
        echo "
            <script>
                alert('Data berhasil dihapus');
                document.location.href = 'dosen.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal dihapus');
                document.location.href = 'dosen.php';
            </script>
        ";
    }
} else {
    // Jika tidak ada parameter id, kembali ke halaman dosen
    header('Location: dosen.php');
}
?>