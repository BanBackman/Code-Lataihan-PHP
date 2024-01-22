<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contoh penggunaan statement if</title>
</head>
<body>
	<?php
	$Nilai=95;
	if ($Nilai >=60) {
		echo "Nilai anda adalah ". $Nilai . " Selamat Anda Lulus";
	}	else {
		echo "Nilai anda adalah ". $Nilai . " Maaf anda tidak lulus";
	}
	?>
</body>
</html>