<?php 
// Memanggil file konfigurasi
require 'c.php';

// Ambil data di URL
$id = $_GET["id"];

// Query data dosen berdasarkan id
$dosen = query("SELECT * FROM dosen WHERE id = $id")[0];

// Cek status tombol apakah sudah ditekan 
if (isset($_POST["submit"])) {
    // Menambahkan fungsi untuk menyimpan data dengan fungsi ubah yang sudah dibuat di config.php
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil diubah');
                document.location.href = 'dosen.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diubah');
                document.location.href = 'dosen.php';
            </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Ubah Dosen</title>
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
        <h1 class="title">Form Ubah Dosen</h1>
        <form action="" method="POST">
            <input type="hidden" name="id" value="<?= htmlspecialchars($dosen["id"]); ?>">
            <div class="form-group">
                <label for="nama_dosen">Nama Dosen:</label>
                <input type="text" class="form-control" id="nama_dosen" name="nama_dosen" value="<?= htmlspecialchars($dosen["nama_dosen"]); ?>" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= htmlspecialchars($dosen["alamat"]); ?>" required>
            </div>
            <div class="form-group">
                <label for="tlp">Telepon:</label>
                <input type="text" class="form-control" id="tlp" name="tlp" value="<?= htmlspecialchars($dosen["tlp"]); ?>" required>
            </div>
            <div class="form-group">
                <label for="gelar">Gelar:</label>
                <input type="text" class="form-control" id="gelar" name="gelar" value="<?= htmlspecialchars($dosen["gelar"]); ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($dosen["email"]); ?>" required>
            </div>
            <button type="submit" class="btn" name="submit">Simpan</button>
        </form>
    </div>
</body>
</html>