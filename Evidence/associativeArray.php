<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 30px auto;
            text-align: center;

        }

        th,
        td {
            border: 1px solid black;
            padding: 5px;
        }

        th {
            background-color: yellowgreen;
        }
    </style>

</head>

<body>
    <pre>
    <h3>Loop Through Associative Array: //syntax </h3>
        foreach($person as $key => $value){
            echo "$key : $value";
        }
</pre>
    <?php
    $students = array(
        "Farhana" => "A",
        "Sabrina" => "A-",
        "Sobita" => "A+",
        "Priya" => "B",
        "Rini" => "C",
    );
    ?>

    <table>
        <tr>
            <th>Name</th>
            <th>Grade</th>
        </tr>
    <?php
        foreach ($students as $name => $grade) {
        echo "<tr>";
        echo "<td>$name</td>";
        echo "<td>$grade</td>";
        echo "</tr>";
        }

        ?>
    </table>
</body>

</html>