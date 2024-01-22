<!DOCTYPE html>
<html>
<head>
	<title>Menghitung Luas Lingkaran</title>
</head>

<body>
<?php
		//Konstanta untuk nilai judul
		define("Judul","Hitung Luas Lingkaran");
		#Konstanta untuk nilai phi
		define("phi",3.14);

	/*	rumus dari Luas Lingkaran adalah
		L = phi * r * r
		dimana phi = 3.14 */

	echo Judul."<br>";
	$r = 10;
	echo "Jari-jari = $r<br>";

	//rumus
	$luas = phi * $r * $r;
	echo "Luas Lingkaran = $luas";
?>

</body>
</html>