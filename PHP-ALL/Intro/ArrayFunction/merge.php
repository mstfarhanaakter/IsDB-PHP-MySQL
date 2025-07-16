<h1>Merge // Combine two variables into one </h1>
<?php 
$a = ["dog", "cat"];
$b = ["fish", "rabbit", "tortoise"];
$merged = array_merge($a, $b);
print_r($merged);
echo "<br>";
echo $merged[2];

?>