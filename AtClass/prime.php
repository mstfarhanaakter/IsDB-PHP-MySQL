<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime number</title>
</head>
<body>
  <h1>Prime Number</h1>
  <form action="" method="post">
    Enter your number: <input type="text" name="number">
  </form> 

<?php 
    if ($_POST){

    $num = (int) $_POST["number"];
    $isprime = true;
    if ($num <= 1){
        $isprime = false;
    };
    for( $i = 2; $i < $num; $i++ ){
        if ($num % $i == 0){
            $isprime = false;
            break;
    }
}

    if ($isprime){
        echo"<br>";
        echo "$num is a prime number";
    }else{
        echo"<br>";
        echo "$num is not a prime number";
    };

    }

?>
</body>
</html>