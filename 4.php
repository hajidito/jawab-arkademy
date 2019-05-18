<?php 

function cetak_gambar($n) 
{ 
    for ($i = 0; $i < $n; $i++) { 
        for ($j = 0; $j < $n; $j++) { 
            if ($i == $n+1 || $i == $n ||  
                $j == $n+1 || $j == $n ||  
                $i == $j || $i == $n - 1 - $j){              
                echo " x ";          
			}
            else
                echo " = "; 
        } 
  
        echo "<br>"; 
    } 
} 

    
    echo "cetak_gambar(5) <br>".cetak_gambar(5);
	echo "<br>";
    echo "cetak_gambar(7) <br>".cetak_gambar(7);  
?>