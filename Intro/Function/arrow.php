<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrow</title>
</head>
<body>
    <h1>Arrow Function</h1>
    <h3 style="color:red">Syntax</h3>
    <p>$functionName = fn(parameter1, parameter2, ...) => expression;
        <ul>
            <li>fn — Introduces an arrow function.</li>
            <li>(parameter1, parameter2, ...) — The parameter list (just like in a normal function).</li>
            <li>=> — The "arrow" pointing to the expression the function returns.</li>
            <li>expression — A single expression (not a block of code).</li>
        </ul>
    </p>
    <p style="text-decoration:underline">For example -</p>
    <?php 
    $y = "hello bangladesh"; // string to uppercase
    $x = fn($y) =>strtoupper($y);
    echo $x($y);
    
    echo "<br>";

    $n = "HELLO BANGLADESH"; // string to lowercase
    $z = fn($n) =>strtolower($n);
   echo $z($n);

   echo "<br>";
   $info = fn () => "Hello";
   echo $info();
    
    ?>
</body>
</html>