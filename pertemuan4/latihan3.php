<form action="" method="POST">
	Masukkan Nama Anda <input type="text" name="nama">
	<button type="submit" name="submit">Kirim</button>
</form>

<?php if( isset($_POST["submit"])){ ?>
<h1>Halo, Selamat Datang <?= $_POST["nama"];?></h1>

<?php } ?>