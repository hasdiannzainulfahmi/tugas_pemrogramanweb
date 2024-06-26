<?php 
//Memanggil file config
require 'config.php';

// cek status tombol apakah sudah di tekan 
if(isset($_POST["submit"])){
    // menambahkan fungsi untuk menyimpan data dengan fungsi tambah yang sudah dibuat di config.php
    if(tambah($_POST) > 0){
        echo "
            <script>
                alert('Data berhasil disimpan');
                document.location.href = 'mahasiswa.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('Data gagal disimpan');
                document.location.href = 'mahasiswa.php';
            </script>
        ";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Mahasiswa</title>
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
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
            color: #333;
        }
        input[type="text"],
        select {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group select {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Form Mahasiswa</h1>
        <form action="" method="POST">
            <div class="form-group">
                <label for="nim">NIM *:</label>
                <input type="text" id="nim" name="nim" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama *:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan:</label>
                <select id="jurusan" name="jurusan">
                    <option>Pilih Jurusan</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                </select>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email">
            </div>
            <input type="submit" value="Simpan" name="submit">
        </form>
    </div>
</body>
</html>