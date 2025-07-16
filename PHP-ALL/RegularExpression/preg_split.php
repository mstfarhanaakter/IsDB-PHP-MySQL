<?php 
    

$str = "apple, banana, cherry, date";
$result = preg_split("/,\s*/", $str); // Split on comma followed by optional space
print_r($result); // Properly print the array

print_r(preg_split("/[ ]/", "This is a text"));

?>