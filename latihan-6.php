<!DOCTYPE html>
<html>
<head>
	<title>Operator Perbandingan</title>
</head>

<body>
<?php
    
	$bil1	= 200;
	$bil2	= 20;
	$teks1	= "PHP";
	$reks2	= "php";

	$hasil	=	$bil1 == $bil2;
	echo "$bil1 == $bil2 = $hasil<br>";

	$hasil	=	$bil1 != $bil2;
	echo "$bil1 != $bil2 = $hasil<br>";

	$hasil	=	$bil1 >= $bil2;
	echo "$bil1 >= $bil2 = $hasil<br>";
    
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	$hasil	=	$teks1 == $teks2;
	echo "$teks1 == $teks2 = $hasil<br>";

	$hasil	=	$teks1 != $teks2;
	echo "$teks1 != $teks2 = $hasil<br>";
?>
	
</body>
</html>