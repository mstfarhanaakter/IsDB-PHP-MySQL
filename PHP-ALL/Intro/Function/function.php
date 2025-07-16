<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <h1></h1>
    <?php
        function name($num1, $num2){
            echo $num1+$num2;

        }
        name(4,6);

        echo "<br>";

        function info2($x, $y){
            $z = $x ** $y;
            return $z;
        }
        echo info2(4,3);

        echo "<br>";
        
        function country($name, $year){
            echo "My country name is $name and $year it got independece from pakistan ";
        }
        country("Bangladesh", 1971);

    ?>
</body>
</html>