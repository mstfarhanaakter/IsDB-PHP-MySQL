<?php 
    $a = "Hello";
    $b = & $a;
    $b = "World!";
    echo $b;
?>