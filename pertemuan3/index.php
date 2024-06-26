<?php
// array 
// variabel yang memiliki baanyak nilai
// elemen array boleh memiliki type data yang berbeda
// pasangan antara key dan value
// dimana keynya adalah index, yang di mulai dari 0


// membuar array
// cara lama 
$hari = array("Senin", "Selasa", "Rabu");

//cara baru
$bulan = ["Januari", "Februari", "Maret", "April"];
$acak = [ 324, "String", true];

echo "<pre>";
print_r($acak);
echo "<br>";
// menampilkan isi dari array dengan menggunakan key atau index
echo $hari[0]." ".$bulan[1]." ".$acak[0];

// menambah isi array
//$hari[] = "Kamis";
//$hari[] = "Jumat"; 

var_dump($hari);

// menghapus isi array
unset($hari[1]);

var_dump($hari);
var_dump($acak);



// Array Asosiatif
// Array yang indexnya tidak menggunakan nomor atau angka.
// index array berbentuk kata kunci.

$artikel = [
		"judul" => " Belajar Array",
		"penulis" => " Yati",
		"kategori" => "Pemrograman PHP, Web",
		"view" => 150,
]; 

// menampilkan isi dari array asosiatif
echo "<hr>";
echo "Judul :".$artikel["judul"]."<br> ~ Penulis :  ".$artikel["penulis"];
echo "<hr>";

// Menampilakn data dalam array dengan for
$buah = ["Mangga", "Apel", "Nanas", "Duren", "Jambu"];
for ($i=0; $i<count($buah); $i++){
	echo $buah[$i]."<br>";
}

echo "<hr>";
// Menampilkan data array dengan foreach
foreach ($buah as $jenis) {
	echo $jenis."<br>";
}

echo "<hr>";
// Menampilkan data array dengan while
$i=0;
while ($i < count($buah)) {
	echo $buah[$i]."<br>";
	$i++;
}

// Array Mutli Dimensi 
// array yang memiliki deimesi lebih dari satu 
$matrik = [
	[2,3,4],
	[7,5,0],
	[4,3,8],
];
// cara memanggil isi dari array
echo $matrik[1][0];



$mahasiswa = [
["TI16190020", "Samsul Hadi", "Teknik Informatika", "samsulhadi@gmail.com"],
["TI16190011", "Januardi Putra", "Teknik Informatika", "januardiputra@gmail.com"],
["TI16190025", "M. Izzudin", "Teknik Informatika", "m-izzudin@gmail.com"],
["TI16190008", "Hartini", "Teknik Informatika", "hartini@gmail.com"],
];












?> 