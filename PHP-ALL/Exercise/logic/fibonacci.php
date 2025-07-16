<?php 

    $n = 30;
    $first = 0;
    $second = 1;

    echo "Fibonacci Sequence: ";
    // echo "$first, $second";

    for ($i = 1; $i < $n ; $i++){
        $next = $first + $second;
        echo $next;
        echo "<br>";
        $first = $second;
        $second = $next;
    }

?>