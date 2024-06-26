<?php


echo date("d-m-Y");
echo "<br>".time();

echo "<br>".date("l, d - M - Y", strtotime("11 November 2020"));

//echo "<body style='background-color:green'>";

// membuat fungsi

function salam($waktu = "Datang", $nama = "Admin"){
	return " Selamat $waktu, $nama!";
}
?>

<h1 style="color:green"><?php echo salam("Siang", "Teman-teman");?></h1>