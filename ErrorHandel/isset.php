<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isset()</title>
</head>
<body>
    <h1>isset()</h1>
    <p>The isset() function in PHP is used to check if a variable is set and is not null. <br>
     It returns true if the variable exists and is not null, and false otherwise.</p>

     <h1>✅ Basic Syntax:</h1>
     <p>isset($variable);</p>
    
    <?php
        if (isset($num)){
            $r = $num + 10;
            echo $r;
        }else{
            echo "False";
        }
    echo "<br>";

        $var = 5;
        if(isset($var)){
            echo "Var is set";
        }else{
            "Var is not set";
        }

        //
        //
        echo "<br>";
        //
        //
       $var1 = null;

        if (isset($var1)) {
            echo "Var is set";
        } else {
            echo "Var is not set";
        }
        // $result = $num +10;
        // echo $result;
    
    ?>
</body>
</html>