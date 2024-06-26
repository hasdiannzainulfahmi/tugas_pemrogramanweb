<?php 
// Memanggil file config
require 'conf.php';

// Cek status tombol apakah sudah ditekan
if (isset($_POST["submit"])) {
    // Menambahkan fungsi untuk menyimpan data dengan fungsi tambah yang sudah dibuat di config.php
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil disimpan');
                document.location.href = 'dosen.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal disimpan');
                document.location.href = 'dosen.php';
            </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Dosen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
            color: #333;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"] {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .form-group {
            margin-bottom: 5px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .required::after {
            content: "*";
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Form Tambah Dosen</h1>
        <form action="" method="POST">
            <div class="form-group">
                <label for="nama_dosen" class="required">Nama Dosen:</label>
                <input type="text" id="nama_dosen" name="nama_dosen" required>
            </div>
            <div class="form-group">
                <label for="alamat" class="required">Alamat:</label>
                <input type="text" id="alamat" name="alamat" required>
            </div>
            <div class="form-group">
                <label for="tlp" class="required">Telepon:</label>
                <input type="text" id="tlp" name="tlp" required>
            </div>
            <div class="form-group">
                <label for="gelar" class="required">Gelar:</label>
                <input type="text" id="gelar" name="gelar" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
            </div>
            <input type="submit" value="Simpan" name="submit">
        </form>
    </div>
</body>
</html>