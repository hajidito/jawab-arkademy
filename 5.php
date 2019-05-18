<?php
	//print_r($mins);
	function minmax($n){
		$mins = array_keys($n, min($n));
		$maxs = array_keys($n, max($n));
		$atas = max($n);
		$bawah = min($n);
		if ($maxs[0] < $mins[0]){
			for ($x = $mins[0]; $x >= 0; $x--){
				unset($n[$x]);
			}
			$atas = max($n);
		}
		echo "[".$bawah.",".$atas."] <br>";
	}
	
	$c = array("z","g","a","b","y","f");
	$a = array("h","g","a","b","d","f");
	$b = array("a","b","c","d");
	
	echo "array = (h,g,a,b,d,f) <br>";
	minmax($a);
	
	echo "array = (a,b,c,d) <br>";
	minmax($b);
	
	echo "array = (z,g,a,b,y,f) <br>";
	minmax($c);
	
?>