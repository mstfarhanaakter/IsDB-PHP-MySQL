<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th{
            background-color: #D1BBA4;
            
        }
         th,  td{
            border:1px solid black;
            padding:10px;
            text-align:center;
        }

        table{
            border-collapse: collapse;
            min-width: 25%;     /* */
            margin:30px auto;  /* margin-top/bottom 30px and margin -left right auto */

        }
    </style>
</head>
<body>
    <?php 

    $array = [
        "Farhana"=> "B",
        "Sobita"=> "A+",
        "Sabrina"=> "A",
        "Priya"=> "A",
        "Sumona"=> "B",
        "Nabila"=> "C",
        "Sharmin"=> "F",
        "Foujiya"=> "D",
    ];


?>
    <table>
        <th>Name</th>
        <th>Grade</th>
        <?php 
            foreach ($array as $name => $grade){
                echo "<tr>";
                echo "<td>$name</td>";
                echo "<td>$grade</td>";  
                echo"</tr>";
            }

        ?>
    </table>
</body>
</html>

