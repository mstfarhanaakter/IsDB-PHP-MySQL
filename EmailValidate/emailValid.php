<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Validation</title>
</head>
<body>
    <form action="" method="post">
        Enter Your Email Here: 
        <input type="email" required name="n">
        <input type="submit" name="submit">
    </form>

    <?php 
    if (isset($_POST["submit"])) {
        $email = $_POST['n'];

        // Validate email using regular expression
        if (preg_match("/^[a-zA-Z0-9_.-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/", $email)) {
            echo "✅ Valid email address: $email";
        } else {
            echo "❌ Invalid email address.";
        }
    }
    ?>
</body>
</html>
