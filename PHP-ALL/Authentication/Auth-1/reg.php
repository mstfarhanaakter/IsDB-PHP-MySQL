<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
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
        <legend>Register Here</legend>
        <?php 
        if(isset($msg)) echo "<p class='msg'>$msg</p>";
        ?>
        <input type="email" placeholder="Your Email" name="email" required>
        <input type="password" placeholder="Your Password" name="password" required>
        <button name="register">REGISTER</button>
        <p>Already registered? <a href="login.php">Login</a></p>
    </form>
</div>

<?php 
if(isset($_POST['register'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // trim() ফাংশনটি ব্যবহার করা হয়েছে যাতে ইনপুটের আগে বা পরে থাকা ফাঁকা স্পেস মুছে ফেলা হয়।
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    // ইউজারের পাসওয়ার্ডটি সিকিউর (নিরাপদ) করার জন্য সেটাকে হ্যাশ করা হচ্ছে password_hash() ফাংশন দিয়ে।

    // Check if email already exists
    $file = file("data.txt", FILE_IGNORE_NEW_LINES);
    
    // FILE_IGNORE_NEW_LINES ব্যবহার করা হয়েছে যেন প্রতিটি লাইনের শেষে নতুন লাইন (\n) বাদ পড়ে যায়।
    foreach($file as $line){
        list($storedEmail, ) = explode(",", $line);
        if($storedEmail == $email){
            $msg = "Email is already registered!";
            exit;
            // exit দিলে এর পরের কোনো কোড আর চলবে না।
        }
    }

    // Save to file
    file_put_contents("data.txt", "$email, $hashedPassword\n", FILE_APPEND);
    header("Location: login.php");
    exit;
}
?>
</body>
</html>
