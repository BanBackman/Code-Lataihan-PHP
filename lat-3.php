<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CONTOH PENGGUNAAN STATEMENT SWITCH</title>
</head>
<body>
	<?php 
	$Nilai=3;
	switch ($Nilai){
		case 0:
			$terbilang = "NOL";
			break;
		case 1:
			$terbilang = "SATU";
			break;
		case 2:
			$terbilang = "DUA";
			break;
		case 3:
			$terbilang = "TIGA";
			break;
		case 4:
			$terbilang = "EMPAT";
			break;
		case 5:
			$terbilang = "LIMA";
			break;
		default:
			$terbilang = "Tidak ada nilai";
	}
	echo "Bentuk terbilang dari angka $Nilai adalah $terbilang";
	?>
</body>
</html>