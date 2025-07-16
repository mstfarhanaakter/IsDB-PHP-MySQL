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

            <label for="id"><b>ID: </b></label>
            <input type="text" name="id" id="id" required><br><br>

            <label for="name"><b>Name: </b></label>
            <input type="text" name="name" id="name" required><br><br>

            <label for="batch"><b>Batch: </b></label>
            <input type="text" name="batch" id="batch" required><br><br>

            <button name="submit">Register</button>
        </form>
    </div>

    <?php
    require("FormClass.php");

    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['submit'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $batch = $_POST['batch'];

        $data = new FormData($id, $name, $batch);
        $data->dataStore();
        echo "<p style='text-align:center;color:green;'>Data submitted successfully!</p>";
    }

    FormData::display();
    ?>

</body>

</html>