<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        div {
            display: flex;
            justify-content: center;
            align-items: center;
            /* height: 100vh; */
            margin-top:40px;
        }

        form {
            border: 2px solid black;
            padding: 20px;
            width: 25%;
            color: black;
            background-color: ;
        }

        legend {
            text-align: center;
            margin-bottom: 10px;
            font-weight: bold;
        }

        label {
            width: 100px;
            display: inline-block;
            margin-bottom: 5px;
        }

        input {
            padding: 10px;
            margin-bottom: 10px;
            width: 50%;
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
            <legend><b>Student Registration</b></legend>

            <label for="id"><b>Email </b></label>
            <input type="text" name="email" id="id" required><br><br>

            <label for="name"><b>Contact </b></label>
            <input type="text" name="no" id="name" required><br><br>

            <label for="batch"><b>Password </b></label>
            <input type="password" name="pass" id="batch" required><br><br>

            <button name="submit">Register</button>
        </form>
    </div>

    <?php
    require("FormClass.php");

    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['submit'])) {
        $email = $_POST['email'];
        $contact = $_POST['no'];
        $password = $_POST['pass'];
        
        if(preg_match("/^[a-zA-Z0-9_.-]+[@][a-z0-9]+[.][a-z]{2,6}$/", $email)){
        echo "<p style='color:green'>Your email is valid</p>";

            }else{
                echo "<p style='color:red'>Your email is invalid</p>";
            }
            if (preg_match('/^\+?[0-9\s]{7,}$/', $contact) && strlen($contact)>=7){
                echo "<p style='color:green'>Your phone is valid</p>";
            }else{
                echo "<p style='color:red'>Your phone is invalid</p>";
            }

            if(strlen($password)>= 6){
                echo "<p style='color:green'>Your Password is strong</p>";
            }else{
                echo "Your Password is weak";
            }
        $data = new FormData($email, $contact, $password);
        $data->dataStore();
        echo "<p style='text-align:center;color:green;'>Data submitted successfully!</p>";
    }

    FormData::display();
    ?>

</body>

</html>