<?php 
    $file = "store.txt";
    $current = file_get_contents($file);
    $content = "Farhana\n";
    file_put_contents($file , $current. $content);

?>