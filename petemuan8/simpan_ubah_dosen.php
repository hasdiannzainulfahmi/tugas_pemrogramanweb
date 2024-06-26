<?php
include('koneksi.php');

$id = $_GET['id'];
$dosen = query("SELECT * FROM dosen WHERE id = $id")[0];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_dosen = $_POST['nama_dosen'];
    $alamat = $_POST['alamat'];
    $tlp = $_POST['tlp'];
    $gelar = $_POST['gelar'];
    $email = $_POST['email'];

    $query = "UPDATE dosen SET nama_dosen = '$nama_dosen', alamat = '$alamat', tlp = '$tlp', gelar = '$gelar', email = '$email' WHERE id = $id";
    
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Data berhasil diubah'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Data gagal diubah');</script>";
    }
}
?>

<form method="post">
    <div class="form-group">
        <label>Nama Dosen</label>
        <input type="text" name="nama_dosen" class="form-control" value="<?= $dosen['nama_dosen']; ?>" required>
    </div>
    <div class="form-group">
        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control" value="<?= $dosen['alamat']; ?>" required>
    </div>
    <div class="form-group">
        <label>Telepon</label>
        <input type="text" name="tlp" class="form-control" value="<?= $dosen['tlp']; ?>" required>
    </div>
    <div class="form-group">
        <label>Gelar</label>
        <input type="text" name="gelar" class="form-control" value="<?= $dosen['gelar']; ?>" required>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="<?= $dosen['email']; ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Ubah</button>
</form>