<?php 
error_reporting(0);
$n=2; 
function getName($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz'; 
    $randomString = '';
	$simpan = array();
	for ($h = 1; $h <= $n; $h++) {
		$randomString = '';
		for ($i = 0; $i < 32; $i++) { 
			$index = rand(0, strlen($characters) - 1); 
			$randomString .= $characters[$index]; 
		}
		array_push($simpan,$randomString);
	}
    return $simpan; 
} 

function getUnique($n) {
	$r1 = (getName($n));
	echo "Jawaban A : ";
	print_r($r1);
	$characters = '0123456789abcdefghijklmnopqrstuvwxyz';
	$arrlength = count($r1);
	$arrhasil=array();
	echo "<br>";
	for($x = 0; $x < $arrlength; $x++) {
		$arr1="";
		$arr2="";
		$arr3="";
		$result = "";
		$arr1 = str_split(count_chars( $r1[$x], 3));
		$arr2 = str_split($characters);
		$arr3 = array_diff($arr2,$arr1);
		foreach ($arr3 as $key => $val) {
			array_push($arr1,$val);
		}
		
		for($y = 0; $y < 32; $y++) {
			$result .= $arr1[$y];
		}
		array_push($arrhasil,$result);
		echo "<br>";
	}
	echo "Jawaban B : ";
	print_r($arrhasil);
}
	
getUnique($n);  
?> 