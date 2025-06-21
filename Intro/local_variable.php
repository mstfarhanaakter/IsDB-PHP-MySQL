<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local Variable</title>
</head>
<body>
    <?php
    $a = 12;
        function info(){
            $a++;
            echo "This number is "."". $a++;
            
        }
        info();
     ?>

     // global variable 
     <?php
     function info1(){
        $b ="12"
        // echo $b;
     }
     info1();
      ?>

    // super gloabl variable 
    <?php 
        echo $_SERVER['SERVER_NAME'];
        echo "<br>";
        echo $_SERVER['SERVER_PORT'];
        echo "<br>";
        echo $_SERVER['SCRIPT_FILENAME'];
    ?>
</body>
</html>