<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_POST</title>
</head>
<body>
    <H1>Using $_POST Superglobal</H1>
    <?php
    echo $_POST['fname']; //Data sent via HTTP POST (e.g., from forms).
    echo "<br>";
    echo $_POST['email'];
    
    ?>
    <form action="#" method = post>
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