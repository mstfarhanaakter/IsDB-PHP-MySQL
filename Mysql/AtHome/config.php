<?php 
$link = mysqli_connect("localhost","root","","mydata");
if (!$link) {
    die("Database not connected". mysqli_connect_error());
}else{
    // echo "Connect successfully";
}
?>