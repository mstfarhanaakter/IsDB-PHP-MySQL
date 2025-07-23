<?php 
    $sql_connect = mysqli_connect("localhost", "root", "", "info");
?>
<style>
    table{
        margin: 30px auto;
        padding:10px;
        text-align: center;
    }
    table, th, td{
        border:1px solid black;
        border-collapse: collapse;
        padding:10px;
    }
</style>
<body>
    <table>
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Address</td>
            <td>Higher Education</td>
        </tr>

        <?php 
        $data = $sql_connect->query("SELECT * FROM `users information`");
        while(list($name, $email, $phone, $address, $higher_education)= $data ->fetch_row()){
            echo "<tr>
            <td>$name</td>
            <td>$email</td>
            <td>$phone</td>
            <td>$address</td>
            <td>$higher_education</td>
            
            </tr>";
        }
        ?>
    </table>
</body>