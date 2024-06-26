<?php
// menampilkan nilai dari suatu variabel dengan 
// cara print_r() dan var_dump();

$data = array(

		"nim" => "TI1619200",
		"nama" => "Ahmad Supardi"
	);
print_r($data);
echo "<br>";
var_dump($data);


// Pengkondisian atau percabangan
// if else
// if else if else
// ternary
// swich 



$nilai = 20;

echo "Nilai Awal:  : ".$nilai;
if ($nilai >= 90){
	echo " Nilai : A";
}else if($nilai >= 70 ){
	echo " Nilai : B";
}else {
	echo " Nilai : C";
}

// ternary if else
// (kondisi) ? benar : salah 
echo "<br>";
$kecepatan = 90;
echo $kecepatan >= 80 ? " Kurangi Kecepatan" : "Kecepatan Stabil";
//(kondisi) ? benar : (kondisi ? benar : salah)

echo "<br>";
$nilai = 75;
echo ($nilai >= 90) ? "Nilai : A" : ($nilai >= 70  ? "Nilai : B" : "Nilai : C");

// Swich  Rumus
/* swich (kondisi)
 		case "kondisi":
 		echo "Nilai Benar";
 		break;

 		default:
 		echo "Nilai";
*/

$warna = "Hijau";

switch ($warna) {
	case "Merah":
		echo "Warna Kesukaan Anda Adalah Merah";
		break;
	case "Biru" :
		echo "Warna Kesukaan Anda Adalah Biru";
		break;
	case "Hijau":
		echo "Warna Kesukaan Anda Adalah Hijau";
		break;
	default:
		echo "Warna Kesukaan Bukan Merah, Biru atau Hijau";
		break;
}
?>

<table border="1" cellpadding="10" cellspacing="0">
	<?php for( $i = 1; $i <= 5; $i++) : ?>
		<?php if($i % 2 == 0) :?>
			<tr style="background-color: silver">
		<?php else : ?>
			<tr>
		<?php endif;?>
			<?php for($j = 1; $j <= 5; $j++ ) : ?>
				<td><?= "$i, $j";?></td>
			<?php endfor;?>
		</tr>
	<?php endfor; ?>

</table>