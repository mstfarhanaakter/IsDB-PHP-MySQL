<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime</title>
</head>
<body>
    <h1>Find out prime number by using your input number -</h1>
    <form action="" method="POST">
    Enter Number: 
    <input type="text" name="n">
    <input type="submit" value="Calculate">
    </form>

    <?php 
        if ($_POST){
            $num = $_POST["n"];
            $isPrime = true;
            if($num <=1){
                $isPrime = false;
                echo "This not prime or composite number";
                echo "<br>";
            }

            for ($i = 2; $i < $num; $i++){
                if ( $num % $i ==0){
                    $isPrime = false;
                    break;
                }
            }
            if($isPrime){
                echo " <h4>$num this is prime number</h4> ";
            }else{
                echo " <h4>$num this is not prime number</h4>";
            }
        }
    ?>
</body>
</html>