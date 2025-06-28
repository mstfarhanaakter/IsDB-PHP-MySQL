<?php 
    $num = 17;
    $isPrime = true;

    if ($num <= 1){
        $isPrime = false;
    }

    for ($i = 2; $i < $num ; $i++){
        if ($num % $i == 0){
            $isPrime = false;
            break;
        };
    };
    if($isPrime){
        echo "$num is prime number.";
    }
    else{
        echo "$num is not a prime number.";
    };
?>