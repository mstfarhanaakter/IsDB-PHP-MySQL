<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeric</title>
</head>
<body>
    <?php 
    function num () {
        echo is_numeric(21123); //Checks whether a variable is a number or numeric string
    };
    num();
    echo "<br>";
     function num1 () {
        echo ("Round: " .round(34.57654)); //Rounds a number to the nearest integer or decimal place
    };
    num1();
    echo "<br>";

    function num2 () {
        echo ("Random: " .rand(1, 100)); // Returns a random integer
    };
    num2();
    echo "<br>";

    function num3 () {
        echo ("Max: " .max(10, 20, 30)); //Returns the highest value from a list of numbers
    };
    num3();
    echo "<br>";

    function num4 () {
        echo ("Min: " .min(10, 20, 30));  //Returns the lowest value from a list of numbers
    };
    num4();
    echo "<br>";

    function num5 () {
        echo ("Square: " .sqrt(64)); // Returns the square root of a number
    };
    num5();
    echo "<br>";

    function num6 () {
        echo ("Floor: ". floor(56.87)); // Rounds a number down to the nearest integer
    };
    num6();
    echo "<br>";

    function num7 () {
        echo ("Ceil: " .ceil(23.567)); // Rounds a number up to the nearest integer
    };
    num7();
    echo "<br>";

    function num8 () {
        echo ("MT-Rand: " .mt_rand(1, 1000)); // Faster version of rand(), uses Mersenne Twister
    };
    num8();
    echo "<br>";

    function num9 () {
        echo ("Pow: " .pow(3, 3)); //Raises a number to the power of another (pow(base, exp))
    };
    num9();
    echo "<br>";

    function num10 () {
        echo ("Absolute: " .abs(-2)); // Returns the absolute value of a number
    };
    num10();
    echo "<br>";
    ?>
    
</body>
</html>