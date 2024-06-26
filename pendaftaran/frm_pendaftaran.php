<?php
include "../config/koneksi.php";
$query = mysqli_query($koneksi, "SELECT * FROM tbl_jenjang_pendidikan");
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap 
contributors">
	<meta name="generator" content="Hugo 0.88.1">
	<title>Form Pendaftaran</title>
	<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples
/navbar-fixed/">
	<!-- Bootstrap core CSS -->
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet">

	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
 	</style>
 	
	<!-- Custom styles for this template -->
	<link href="../assets/css/navbar-top-fixed.css" rel="stylesheet">
</head>

<body>

	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Projek Sisfo Sekolah</a>
			<!-- <button class="navbar-toggler" type="button" data-bs-
toggle="collapse" data-bs-target="#navbarCollapse" aria-
controls="navbarCollapse" aria-expanded="false" aria-label="Toggle
navigation">
				<span class="navbar-toggler-icon"></span>
			</button> -->

		</div>
	</nav>

	<main class="container">
		<div class="row col-12">
			<h2>Form Pendaftaran</h2>
			<div class="col-3">

			</div>
			<form action="simpan_pendaftaran.php" method="POST">
				<div class="col-6">
					<div class="mb-3">
						<label for="exampleFormControlInput1" class="form-
label">Nama Lengkap</label>
						<input type="text" nama="nama_lengkap" class="form-
control" placeholder="Nama Lengkap..">
					</div>
					<div class="mb-3">
						<label for="exampleFormControlTextarea1" class="form-
label">Alamat</label>
						<input type="text" name="alamat" class="form-control"
placeholder="Alamat">
					</div>
					<div class="mb-3">
						<label for="exampleFormControlTextarea1" class="form-
label">NO Tlp/Hp</label>
						<input type="text" name="no_tlp" class="form-control"
placeholder="No TLp/hp">
					</div>
					<div class="mb-3">
						<label for="exampleFormControlTextarea1" class="form-
label">Nama Ibu Kandung</label>
						<input type="text" name="nama_ibu" class="form-
control" placeholder="Nama Ibu">
					</div>
					<div class="mb-3">
						<label for="exampleFormControlTextarea1" class="form-
label">Nama Ayah</label>
						<input type="text" name="nama_ayah" class="form-
control" placeholder="Nama Ayah">
					</div>
					<div class="mb-3">
						<label for="exampleFormControlTextarea1" class="form-
label">Penghasilan Ayah</label>
						<input type="text" name="penghasilan_ortu"
class="form-control" placeholder="Penghasilan Ayah">
					</div>
					<div class="mb-3">
						<label for="exampleFormControlTextarea1" class="form-
label">Jenjang Pendidikan</label>
						<select name="id_jenjang_pendidikan" class="form-
control">
							<option value=""> -- Pilih Jenjang Pendidikan
--</option>

							<?php
							while ($rs = mysqli_fetch_assoc($query)) :
							?>

								<option value="<?=
$rs['id_jenjang_pendidikan']; ?>"><?= $rs['nama_jenjang_pendidikan'];
?></option>

							<?php
							endwhile;
							?>
						</select>
					</div>
				<div class="mb-3">
				<button type="submit" class="btn btn-sm btn-primary">
Simpan</button>
				</div>
			</div>
		</form>
		<div class="col-3">
		</div>
	</div>
</main>

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>