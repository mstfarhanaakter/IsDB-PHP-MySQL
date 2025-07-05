<?php 
    $file = fopen("new.txt", "r") or die("Unable to open file");
    $text = " Hi, I am new";
    fread($file, $text)

?>