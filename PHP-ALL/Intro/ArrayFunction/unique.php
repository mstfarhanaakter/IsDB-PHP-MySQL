<h1>Unique // Remove duplicate values </h1>
<?php 
    $a = array(1,2,3,4,5,6,7,8,9,10, 1, 2, 3) ;
    $b = array_unique($a);
    print_r($b);