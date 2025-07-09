<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Form</title>
    <style>
        div {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        legend {
            text-align: center;
            margin-bottom: 10px;
            font-weight: bold;
        }

        form {
            border: 2px solid black;
            padding: 10px;
            width: 25%;
            color: black;
        }

        label {
            width: 100px;
            display: inline-block;
            margin-bottom: 5px;
        }

        input {
            padding: 5px;
            margin-bottom: 10px;
            width: calc(100% - 10px);
        }

        button {
            background-color: #7C8362;
            padding: 10px;
            border-radius: 10px;
            border: none;
            font-weight: bold;
            color: white;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #E47E98;
            color: black;
        }

        .message {
            text-align: center;
            font-weight: bold;
        }
        th, td{
            border:1px solid black;
        }
    </style>
</head>
<body>
    <div>
        <form action="" method="post">
            <legend><b>Registration</b></legend>

            <label for="fn">First Name:</label>
            <input type="text" name="fn" id="fn" required><br><br>

            <label for="ln">Last Name:</label>
            <input type="text" name="ln" id="ln" required><br><br>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required><br><br>

            <label for="pass">Password:</label>
            <input type="password" name="pass" id="pass" required><br><br>

            <button name="submit">Register</button>
        </form>
    </div>

    <?php
    require_once("FormClass.php");

    if (isset($_POST['submit'])) {
        $fn = $_POST['fn'] ?? '';
        $ln = $_POST['ln'] ?? '';
        $email = $_POST['email'] ?? '';
        $pass = $_POST['pass'] ?? '';

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $data = new FormData($fn, $ln, $email, $pass);
            $data->dataStore();
            echo "<p class='message' style='color:green;'>তথ্য সফলভাবে জমা হয়েছে ✅</p>";
        } else {
            echo "<p class='message' style='color:red;'>ইমেইল ঠিক নেই ❌</p>";
        }
    }

    // Display stored data
    FormData::display();
    ?>
</body>
</html>
