<?php 

	// STANDAR OUTPUT
	// echo dan print

	echo "Selamat Belajar PHP <br>";
	print " tes ini menggunkan print <br>";

	// PENULISAN PHP 
	// PHP di dalam HTML
	// HTML di dalam PHP

	// VARIABLE 
	// Deklarasi varibel dalam php menggunakan $
	// di ikuti oleh nama variabel
	// tidak boleh diawali dengan angka
	// boleh mangandung angka
	   $nama = " Jihadul Akbar";
	   $pesan = "Hallo.. Semangat dalam belajar <b>".$nama."<b><br>";
	   echo $pesan;

	// OPERATOR 
	// ARITMATIKA 
	// + - * / % 
	$a = 20;
	$b = 80;
	echo $a + $b."<br>"; 
	echo $a * $b."<br>";  


	// CONCATENATION / CONCAT / PENGGABUNGAN STRING

	$nama_depan = " Jihadul ";
	$nama_belakang = "Akbar";

	echo $nama_depan." ".$nama_belakang;
	echo "<br>";


	// PENUGASAN / ASSIGNMENT 
	// =, +=, -=, *=, /=, %=, .=
	$x  = "STMIK Lombok";
	$x .= " ";
	$x .= "Praya NTB";
	echo $x;
	echo "<br>";

	$y = 1;
	$y +=5;
	$y -=5;
	echo $y;
	echo "<br>";


	// PERBANDINGAN
	// ==, <=, >=, >, <, !=

	$a = 10;
	$b = "10";
	if($a === $b){
		echo "Nilai A Sama dengan B";
	}else{
		echo " Nilai A Tidak Sama Degan B";
	}


	// IDENTITAS / STRICT COMPARATION
	// ===, !==

	// LOGIKA / LOGICAL
	// &&, ||, !



?>