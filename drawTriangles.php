<?php 

function counter($value){
    for ($i=0; $i <$value ; $i++) { 
        echo "<br>";
        for ($j=$i+1; $j >0 ; $j--) { 
             echo "*";
        }
    }
}

counter(6);

?>