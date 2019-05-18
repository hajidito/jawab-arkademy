<?php
	
	function  myCountChar ($str,$chr) {
		echo "myCountChar (".$str.",".$chr.") <br>";
		$pecah = str_split($str);
		$arrlength = count($pecah);
		$jumlah=0;
		for($x = 0; $x < $arrlength; $x++) {
			if ($pecah[$x] == $chr){
				$jumlah++; 
			}
		}
		echo "hasil : ".$jumlah."<br>";
	}
	myCountChar ("bootcamp","o");
	myCountChar ("arkademy","k");
	myCountChar ("anjing","n");
	myCountChar ("kucccing","c");
?>