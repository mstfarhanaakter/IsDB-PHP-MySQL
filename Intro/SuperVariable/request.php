<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_REQUEST</title>
</head>
<body>
    <H1>Using $_REQUEST Superglobal</H1>
    <?php
    echo $_REQUEST['fname']; //Combined data from $_GET, $_POST, and $_COOKIE.
    echo "<br>";
    echo$_REQUEST['email']; 
    
    ?>
    <!-- <form action="#" method = GET>  -->
    <form action="#" method = post> 
        <!-- method is not case sensitive and  global variable to show which i want to see  -->
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