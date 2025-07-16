<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
    <style>
        h3{
            color: red;
        }
    </style>
</head>
<body>
    <h1>Find out your factorial by input your number:- </h1>
    <form action="" method="post">
        Enter Number: 
        <input type="text" name="n">
        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php 
        if(isset($_POST["submit"])){
            $num = $_POST["n"];
            $factorial = 1;

            if ($num <0){
                echo "Factorial is not define for negative number";
            }

            else{
                for($i = 1; $i <= $num; $i++){
                $factorial *= $i;
                }
            echo "<h3>Factorial of $num  is: $factorial</h3>";
        }
    }
    
    ?>
</body>
</html>