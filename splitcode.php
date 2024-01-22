<html>
<head>
	
	<title>Gabungan Script PHP</title>
</head>

<body>
<?php

# ini latihan pertama
echo "=====otuput codingan varibel php!=====<br>";
	$nim	="701210181";
	$nama	= "Rizky Pratama";
	$kelas	= "2C Sistem Informasi";

	echo "NIM	: $nim<br>";
	echo "Nama	: $nama<br>";
	echo "Kelas	: $kelas<br>";

 # ini latihan kedua
 echo "=====otuput codingan tipe data php!=====<br>";
    $jumlah	=90;
	$harga	=200000;
	$total	= $jumlah*$harga;

	echo "Jumlah Beli	: $jumlah<br>";
	echo "Harga Barang	: $harga<br>";
	echo "Total Bayar	: $total<br>";

# ini latihan ketiga
echo "=====codingan codingan konstanta php!=====<br>";
    define ("NAMA","Rizky Pratama");
		define ("JENIS","Laki-Laki");

		echo "Nama	: ".NAMA."<br>";
		echo "Jenis Kelamin	: ".JENIS."<br>";

# ini latihan keempat
echo "=====output codingan komentar php!=====<br>";
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


# ini latihan kelima
ECHO "<br>=====output codingan operator php!=====<br>";

$bilangan1 = 10;
$bilangan2 = 3;

$hasil = $bilangan1 + $bilangan2;
echo "$bilangan1 + $bilangan2 = $hasil<br>";
$hasil = $bilangan1 - $bilangan2;
echo "$bilangan1 - $bilangan2 = $hasil<br>";
$hasil = $bilangan1 * $bilangan2;
echo "$bilangan1 * $bilangan2 = $hasil<br>";
$hasil = $bilangan1 / $bilangan2;
echo "$bilangan1 / $bilangan2 = $hasil<br>";
$hasil = $bilangan1 % $bilangan2;
echo "$bilangan1 % $bilangan2 = $hasil<br>";

# ini latihan keenam
echo "=====output codingan perbandingan php!=====<br>";
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

# ini latihan ketujuh
echo "=====output codingan operator logika php!=====<br>";
        $bil1	= 200;
        $bil2	= 20;
        $teks1	= "PHP";
        $reks2	= "php";
    
        error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
        $hasil	=	(($bil1 <> $bil2) or ($teks1 == $teks2));
        echo "(($bil1 <> $bil2) or ($teks1 == $teks2)) = $hasil<br>";
        $hasil	=	(($bil1 <> $bil2) and ($teks1 == $teks2));
        echo "(($bil1 <> $bil2) abd ($teks1 == $teks2)) = $hasil<br>";
?>
</body>
</html>