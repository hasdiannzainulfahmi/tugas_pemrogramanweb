<form action="" enctype="multipart/form-data" method="POST">
	NIM <input type="text" name="nim"><br>
    Nama <input type="text" name="nama"><br>
    Jurusan <input type="text" name="jurusan"><br>
    Email <input type="text" name="email"><br>
    Gambar <input type="file" name="gambar"><br>
	<button type="submit" name="submit">Kirim</button>
</form>

<?php if( isset($_POST["submit"])){ ?>
    <?php
$imageFile = $_FILES['gambar']['tmp_name'];
$imageFileContents = file_get_contents($imageFile);
$withBase64 = base64_encode($imageFileContents);
$imageType = substr($imageFile ,strrpos($imageFile, '.')+1, strlen($imageFile));
echo '<img width="200px" src="data:image/'.$imageType.';base64,'.$withBase64.'"/>';
?>
    <h4>Biodata Mahasiswa</h4>
NIM : <?= $_POST["nim"];?><br>
Nama : <?= $_POST["nama"];?><br>
Jurusan <?= $_POST["jurusan"];?><br>
Email : <?= $_POST["email"];?><br>

<?php } ?>


<!-- "nim" => "TI16190020",
"nama"=> "Samsul Hadi", 
"jurusan" => "Teknik Informatika", 
"email" => "samsulhadi@gmail.com",
"gambar" => "samsul.jpg" -->

