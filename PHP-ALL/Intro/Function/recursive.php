<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recursive Function</title>
</head>

<body>
    <h1>Recursive Function Syntax</h1>

    function functionName($parameter) {  <br>
        if (/* stopping condition */) { <br>
   
             } else { <br>
    
            functionName(/* updated parameter */); <br>
    } <br>
    }

    // Initial call to start recursion <br>
    functionName(initial_value);
    <br>
    <p><b>A recursive function in PHP is a function that calls itself within its own defination </b></p>

    <?php
    function rec($num)
    {
        if ($num <= 8) {
            echo "$num <br>";
            rec($num + 1);
        }
    }
    rec(1);

    ?>
</body>

</html>