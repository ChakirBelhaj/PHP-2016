<?php

$kerstboomsterren = 1;
$regel = 10;
for($i = 0; $i < $regel; $i++) {
	for ($j = 0; $j < $regel-$i-1; $j++){
		echo " ";
	}

	for($j = $kerstboomsterren; $j>0; $j--){
		echo "*";
	}
	echo "<br>";
	$kerstboomsterren +=2;
	
}


?>