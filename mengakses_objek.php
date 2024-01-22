<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tugas Pertemuan 14</title>
</head>
<body>
	<?php
		class laptop {
			//Menambahkan Property
			var $pemilik;
			var $merk;
			var $ukuran_layar;
			var $warna;
			

			//Menambahkan Method
			function hidupkan_laptop () {
				return "Hidupkan laptop";
			}
			function matikan_laptop () {
				return "Matikan laptop";
			}
			}

	//buat objek dari class laptop (instansiasi)
	$laptop_rizky = new laptop();

	//set property
	$laptop_rizky->pemilik="Rizky Pratama";
	$laptop_rizky->merk="Lenovo";
	$laptop_rizky->ukuran_layar="15 inchi";
	$laptop_rizky->warna="Hitam";

	//tampilkan property
	echo $laptop_rizky->pemilik;
	echo "<br/>";
	echo $laptop_rizky->merk="Lenovo";
	echo "<br/>";
	echo $laptop_rizky->ukuran_layar="15 inchi";
	echo "<br/>";
	echo $laptop_rizky->warna="Hitam";
	echo "<br/>";

	//tampilkan method
	echo $laptop_rizky->hidupkan_laptop();
	echo"<br/>";
	echo $laptop_rizky->matikan_laptop();
	?>
</body>
</html>