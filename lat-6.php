<?php
//Membuat Perulangan FOR di PHP//
//contoh 1//
	for ($i = 1; $i <= 10; $i++) {
		echo "Contoh 1: ".$i."<br>";
	}
//contoh 2//
	for ($i = 1; ; $i++) {
		if ($i >10) {
			break;
		}
		echo "Contoh 2: ".$i."<br>";
	}
//contoh 3//
    $i = 1;
	for ( ; ; ) {
		if ($i >10) {
			break;
		}
		echo "Contoh 3: ".$i."<br>";
		$i++;
	}
//contoh 4//
	for ($i = 1, $j = 0; $i<= 10; $j +=$i, print $i, $i++);
?>