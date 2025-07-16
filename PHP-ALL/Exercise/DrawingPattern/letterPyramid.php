<?php
    $name = "Farhana";
    $length = strlen($name);
    for ($i = 0; $i < $length; $i++){
        for($j = 0; $j <= $i; $j++ ){
            echo $name[$j];
        };
        echo "<br>";
    };
?>