<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional</title>
</head>
<body>
    <h1>Conditonal Operator</h1>
    <?php
        $x = 10; 
        $y =15;
        $z = 15;

        if($x === $y ){
            echo "Both Value are equal";
        } else{
            echo "Both value are not equal";
        };

        // 2nd example 
        
        $a = 100;  
        $b = 50;

        if ($a == 100 and $b == 50) { // we can use $$ sign or 'and' word
            echo "<br>";
            echo "Hello world!";
        } else{
            echo "<br>";
            echo "Bye world!";
        }
    ?>
</body>
</html>