<?php 
// Memanggil file konfigurasi
require 'config.php';

// Ambil data di URL
$id = $_GET["id"];

// Query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

// Cek status tombol apakah sudah ditekan 
if (isset($_POST["submit"])) {
    // Menambahkan fungsi untuk menyimpan data dengan fungsi ubah yang sudah dibuat di config.php
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil diubah');
                document.location.href = 'mahasiswa.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diubah');
                document.location.href = 'mahasiswa.php';
            </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Ubah Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 50px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .title {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 2px solid #ddd;
            border-radius: 5px;
        }

        .form-control:focus {
            border-color: #007bff;
            outline: none;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            width: 100%;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">Form Ubah Mahasiswa</h1>
        <form action="" method="POST">
            <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
            <div class="form-group">
                <label for="nim">NIM:</label>
                <input type="text" class="form-control" id="nim" name="nim" value="<?= $mhs["nim"]; ?>" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $mhs["nama"]; ?>" required>
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan:</label>
                <select class="form-control" id="jurusan" name="jurusan" required>
                    <option value="<?= $mhs["jurusan"]; ?>"><?= $mhs["jurusan"]; ?></option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                </select>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= $mhs["email"]; ?>" required>
            </div>
            <button type="submit" class="btn" name="submit">Simpan</button>
        </form>
    </div>
</body>
</html>