<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even or Odd</title>
</head>
<body>
    <h1>Find out Even or Odd Number:- </h1>
    <form action="" method="post">
        Enter Your number: 
        <input type="text" name="n">
        <input type="submit" name="submit" id="" value="Calculate">
    </form>

    <?php 
        if (isset($_POST["submit"])){
            $num = $_POST["n"];

            if($num % 2 == 0 ){
                echo "<h4>$num This is an even number</h4>";
            }
            else{
                echo "<h4>$num This is an odd number</h4>";
        }
        }

    ?> 

    <!-- Ternary operator  using to find out Even or Odd -->
     <?php
        if(isset($_POST["submit"])){
            $num = $_POST["n"];

            $resutl = ($num % 2 == 0) ? "$num is an Even number": "$num is an Odd Number";
            echo $resutl;
        }
     ?>
</body>
</html>