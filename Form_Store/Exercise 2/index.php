<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Form</title>
    <style>
        div {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            /*Vertically center*/

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
            margin: 10px 0 10px 0;
            /* background-color:#9DB1EA; */

            color: black;
        }

        label {
            width: 100px;
            display: inline-block;
            margin-bottom: 5px;
        }

        input {
            padding: 5px;
            /* width: calc(100% - 100px); */
            margin-bottom: 10px;
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
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div>
        <form action="" method="post">
            <legend><b>Registration</b></legend>
            <label for=" "><b>First Name: </b></label>
            <input type="text" name="fn">
            <br>
            <br>
            <label for=" "><b>Last Name: </b></label>
            <input type="text" name="ln">
            <br>
            <br>
            <label for=" "><b>Email Address: </b></label>
            <input type="text" name="email">
            <br>
            <br>
            <label for=" "><b>Passord: </b></label>
            <input type="password" name="pass" required>
            <br>
            <br>
            <button name="submit">Register</button>
        </form>
        </div>
        <?php
            require("FormClass.php");

        if (isset($_POST['submit'])) {
            $fn = $_POST['fn'];
            $ln = $_POST['ln'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            echo "File Submit Successfully";

            // Email validate
        
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Valid email address";
            } else {
                echo "Invalid email address";
            }

        }

        $data = new FormData($fn, $ln, $email, $pass);
        $data ->dataStore();
        echo "File Submit Successfully";


        ?>
    
</body>

</html>