<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Task 2</title>
<style>
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        
    }
    /* button{
        text-align: center;
    } */
     input{
        padding: 5px;
    }
</style>
</head>

<body>
    <h1>Check comments on your grade- </h1>
    <form action="" method="POST">
        Enter Your Grade Here: <input type="text" name="g">
        <input type="submit" name="submit">
        <!-- <button name="submit">Submit</button> -->
    </form>

    <?php
    if (isset($_POST["submit"])) {
        $result = $_POST["g"];
        if ($result == "A+") {
            $grade = "Outstanding";
        } else if ($result == "A") {
            $grade = "Very Good";
        } else if ($result == "B") {
            $grade = "Good";
        } else if ($result == "C") {
            $grade = "Poor";
        } else {
            $grade = "Fail";
        }

        echo "<h3>Your grade: $result is $grade </h3>";
    }

    ?>
</body>

</html>