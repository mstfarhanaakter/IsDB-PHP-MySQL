<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constant</title>
</head>
<body>
    <h1>constant</h1>
    <?php 
    // define(name, value) - used to define constant arrays or strings
    define('Animals', array(
        'dog',
        'cat',
        'bird'
    ));

    echo Animals[1]; // cat
    echo Animals[2]; // bird
    echo Animals[0]; // dog

    echo "<br>";

    define('GREET', "Hi, I am learning PHP");
    echo GREET; // missing semicolon was fixed here

    echo "<br>";

    const CONSTANT = "Hello World!";
    echo CONSTANT;

    echo "<br>";

    // In PHP, you can't concatenate strings when defining a const — this causes an error
    // Use define() instead if you need concatenation
    define('Another_const', CONSTANT . " Goodbye World!");
    echo Another_const;
    ?>
</body>
</html>
