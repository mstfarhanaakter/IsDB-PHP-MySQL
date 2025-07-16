<h1>Find the Largest number</h1>
<form action="" method="post">
    Number X: <input type="number" name="x"> <br><br>
    Number Y: <input type="number" name="y"> <br><br>
    Number Z: <input type="number" name="z"> <br><br>
    <input type="submit" name="submit">
</form>


<?php
if (isset($_POST["submit"])) {
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];

echo "<h4><u>Results: </u></h4>";
echo "<p>You entered 
    <pre>
        <b>X:</b> $x, 
        <b>Y:</b> $y, 
        <b>Z:</b> $z </p>
    </pre>";

    if ($x > $y && $x > $Z) {
        echo "<h3>$x is the largest number</h3>";
    } else if ($y > $x && $y > $z) {
        echo "<h3><p>$y is the largest number</p></h3>";
    } else {
        echo "<h3><p>$z is the largest number</p></h3>";
    }

}

?>