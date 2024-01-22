<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contoh Dua Kondisi atau lebih dengan statement alternatif</title>
</head>
<body>
	<?php
	$Nilai=100;
	$indeks="";
	if (($Nilai >= 80) && ($Nilai <=100)) {
		$indeks="A";
	}	else if(($Nilai >= 65) && ($Nilai <=79)) {
		$indeks="B";
	}	else if(($Nilai >= 50) && ($Nilai <=64)) {
		$indeks="C";
	}	else if(($Nilai >= 0) && ($Nilai <=49)) {
		$indeks="D";
	}	else {
		$indeks="-";
	}
	echo "Nilai anda adalah ". $Nilai ." dengan indeks ". $indeks;
	?>
</body>
</html>