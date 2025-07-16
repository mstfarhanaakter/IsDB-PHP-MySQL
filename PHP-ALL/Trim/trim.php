<?php 
    $text = "    Hello World!   ";
    $trim = trim($text);
    echo $trim;

    echo "<br>"; 
    $text1 = "####  Hello World ####!";
    $trim1 = trim($text1, "#!");
    echo $trim1;

    echo "<br>";

    $text2 = "@@@  Hello World ####!";
    $trim2 = trim($text2, "@#!");
    echo $trim2;
?>