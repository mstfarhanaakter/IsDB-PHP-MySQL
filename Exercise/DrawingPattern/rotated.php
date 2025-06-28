<?php

    $rows = 10;
    for($i= 1; $i <=$rows; $i++){
        // Print spaces
        for($r = $i; $r < $rows; $r++){
            echo "&nbsp; &nbsp;";
        };
    

    // Print stars
    for($k = 1 ; $k <= $i ; $k++){
        echo "@";

     };
    echo "<br>";
    
   };

?>