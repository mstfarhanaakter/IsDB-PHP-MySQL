<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Php Nested Loop</h1>
<?php 
    for ($i = 0; $i <= 10; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
?>
<h1>Script Nested loop </h1>
    <script>
        for (i=0; i<=10; i++){ //create row
            for (j = 0;j<= i; j++){ //create column
                document.write("*");
            }
            document.write("<br>");
        }
    </script>
</body>
</html>