<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1</title>
    <style>
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;    
    }
    input{
        padding: 5px;
    }
</style>
</head>
<body>
    <h1>Find out Largest number among three numbers- </h1>
<form action="" method="post">
    Number X: <input type="number" name="x"> <br> <br>
    Number Y: <input type="number" name="y"> <br> <br>
    Number Z: <input type="number" name="z"> <br> <br>
    <input type="submit" name="submit">
</form>

<?php
    if(isset($_POST["submit"])){
        $x = $_POST["x"];
        $y = $_POST["y"];
        $z = $_POST["z"];
        echo" <h4>Your Results: </h4>
        <pre>
        <b>X:</b> $x,
        <b>Y:</b> $y,
        <b>Z:</b> $z
        </pre>";

    if($x >= $y and $x>=$z){
        echo "<h3>The largest number is: $x</h3>"; 
    }else if($y >= $x and $y>= $z){
        echo "<h3>The largest number is: $y</h3>"; 
    }else{
        echo "<h3>The largest number is: $z</h3>"; 
    }
}

?>
</body>
</html>

