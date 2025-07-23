<?php 
    $sql_connect = mysqli_connect("localhost", "root", "", "info");

    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $address = $_POST["add"];
        $higher_education = $_POST["he"];
        $query = $sql_connect->query("call call_info('$name', '$email', '$phone', '$address', '$higher_education')");

        // $sql = "INSERT INTO `users information` (name, email, phone, address, `highest education`) VALUES ('$name', '$email', '$phone', '$address', '$higher_education')";
        if ($query) {
             
             header('Location: show-table.php');
         } else {
             echo "Data Not Inserted";
         }
    }
?>


<style>
    form{
        padding: 10px;
        border:1px solid black;
        width: 25%;
        display: flex;
        flex-direction: column;
        margin:30px auto;

    }
    label{
        /* width: 100px; */
        display: inline-block;
    }
    input{
        padding: 10px;
    }
</style>
<body>
    <form action="#" method="POST">
        <!-- <label for="">ID</label>
        <input type="number" name="id">
        <br>
        <br> -->
        <label for="">Name</label>
        <input type="text" name="name">
        <br>
        <br>
        <label for="">Email</label>
        <input type="text" name="email">
        <br>
        <br>
        <label for="">Phone</label>
        <input type="number" name="phone">
        <br>
        <br>
        <label for="">Address</label>
        <input type="text" name="add">
        <br>
        <br>
        <label for="">Highest Information</label>
        <input type="text" name="he">
        <br>
        <br>
        <input type="submit" value="Insert" name="submit">
        <br>
        <br>
        <input type="submit" value = "Show Value" name="value">
    </form>
</body>
