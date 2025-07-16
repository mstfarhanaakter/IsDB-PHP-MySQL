<h1>Factorial Number</h1>
<form action="" method="post">
    Enter factorial number: <input type="text" name="n">
    <input type="submit" value="Calculate">
</form>


<?php 

if ($_POST){
    $num = (int)$_POST["n"];
    $fact = 1;
    for ($i = 1; $i<= $num; $i++){
        $fact *= $i;
    }
    echo "Factorial Number is " . $fact;
}

?>