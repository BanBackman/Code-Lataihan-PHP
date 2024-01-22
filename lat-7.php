<?php
$people = array(
	array('name' => 'Kalle', 'Salt'=> 856412),
	array('name' => 'Pierre', 'Salt'=> 215863)
);

for ($i = 0,$size = count($people); $i <$size; ++$i) {
	$people[$i]['salt'] = mt_rand(000000, 999999);
	echo $i." ".$people[$i]['name']." ".$people[$i] ['salt']."<br>";
}
?>