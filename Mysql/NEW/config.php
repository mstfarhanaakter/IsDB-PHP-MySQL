<?php
$connect = mysqli_connect("localhost", "root", "", "mydata");
if (!$connect) {
    die("Database could not connect". mysqli_connect_error());
}else{
    // echo "Connect successfully";
}

?>