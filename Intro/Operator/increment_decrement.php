<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Increment-Decrement Opeartor</title>
</head>
<body>
    <?php
    //post increment
    echo "Post Increment (x++)";
    echo "<br>";
    $x = 10;
    echo $x++;
    echo "<br>";
    echo $x; //update will be 11 number

    //pre decrement
    echo "<br>";
    echo "Pre Decrement (--x)";
    echo "<br>";
    $y = 10;

    echo --$y;
    echo "<br>";
    echo $y;

     //pre increment
     echo "<br>";
     echo "Pre Increment (++x)"; 
    echo "<br>";
    $z = 10;
    
    echo ++$z;
    echo "<br>";
    echo $z;

    //post decrement
    echo "<br>";
    echo "Post Decrement (x--)";
    echo "<br>";
    $s = 10;
    
    echo $s--;
    echo "<br>";
    echo $s;

   
    

    ?>
</body>
</html>