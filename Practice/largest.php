<?php 
    $a = 456;
    $b = 23;
    $c = 50;
    if ($a >=$b and $a >=$c){
        echo "The largest number is ". $a;
    }else if ($b > $a and $b>$c){
        echo "The largest number is ". $b;
    }
    else{
        echo "The largest number is ".$c;
        
    }
?>