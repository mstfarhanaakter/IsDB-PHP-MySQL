<!DOCTYPE html>
<html>
<head>
    <title>Factorial Calculator</title>
</head>
<body>

<form method="post">
    Enter a number: <input type="number" name="n" required>
    <input type="submit" value="Calculate">
</form>

<?php
if ($_POST) {
    $fact = 1;
    $num =(int) $_POST['n'];

    echo "Factorial number is: " . $num . "<br>";

    for ($i = 1; $i <= $num; $i++) {
        $fact *= $i;
    }

    echo "Factorial result: " . $fact;
}
?>

</body>
</html>
