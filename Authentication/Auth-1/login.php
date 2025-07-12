<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        div {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 50px;
        }
        legend {
            padding: 10px;
            text-align: center;
            font-weight: bold;
            letter-spacing: 2px;
            font-family: Cursive;
            margin-bottom: 10px;
        }
        form {
            padding: 10px;
            border: 2px solid #8C35A5;
            width: 25%;
            align-items: center;
            display: flex;
            flex-direction: column;
            border-radius: 20px;
        }
        input {
            padding: 10px;
            width: 70%;
            margin-bottom: 15px;
        }
        button {
            width: 30%;
            padding: 10px;
            border: none;
            background-color: #97C05C;
            font-weight: bold;
            letter-spacing: 2px;
        }
        button:hover {
            background-color: #8C35A5;
            color: white;
            border-radius: 10px;
            cursor: pointer;
        }
        p {
            font-weight: bold;
            font-size: 17px;
        }
        .msg {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<div>
    <form action="" method="post">
        <img src="donatello.png" alt="" width="100px">
        <legend>Login</legend>
        <?php 
        if(isset($msg)) echo "<p class='msg'>$msg</p>";
        ?>
        <input type="email" placeholder="Your Email" name="email" required>
        <input type="password" placeholder="Your Password" name="password" required>
        <button name="login">LOGIN</button>
        <p>New user? <a href="register.php">Register</a></p>
    </form>
</div>

<?php 
if(isset($_POST["login"])){
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    $file = file("data.txt", FILE_IGNORE_NEW_LINES);

    foreach($file as $line){
        list($storedEmail, $storedPassword) = explode(",", trim($line));
        if($storedEmail == $email && password_verify($password, $storedPassword)){
            header("Location: demo.php");
            exit;
        }
    }
    $msg = "Email or Password is incorrect!";
}
?>
</body>
</html>
