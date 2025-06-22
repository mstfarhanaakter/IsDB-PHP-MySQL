<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_GET</title>
</head>
<body>
    <H1>Using $_GET Superglobal</H1>
    <?php
    echo $_GET['fname']; //Data sent via URL parameters (query string).
    echo "<br>";
    echo $_GET['email'];
    
    ?>
    <form action="#" method = get>
        Name: <br> <input type="text" name="fname">
        <br>
        <br>

        Email: <br> <input type="text" name="email">
        <br>
        <br>
        <input type="submit" value="submit">

    </form>
    
</body>
</html>