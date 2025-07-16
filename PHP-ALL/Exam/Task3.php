<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 3</title>
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
    <h1>Find out Prime Number </h1>
    <form action="" method="POST">
        Enter Number: <input type="number" name="n"> <input type="submit" name="submit">
    </form>

<?php
    if($_POST){
        $num = $_POST["n"];
        $isPrime = true;
        if($num <=1){
            $isPrime = false;
            echo "<br>";
            echo "This is not Prime or Composite";
        }
        for($i = 2; $i <$num ; $i++){
            if($num % $i ==0){
                $isPrime = false;
                break;
            }
        }
        if($isPrime){
            echo "<h3>$num is the prime number</h3>";
        }else{
            echo "<h3>$num is not prime number</h3>";
        }
    }

?>


</body>
</html>