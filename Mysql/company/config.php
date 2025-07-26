<?php 
    $link = mysqli_connect("localhost", "root", "", "company");
    if(!$link){
        die("could not connect");
    }else{
        // echo "Connect successfully";
    }

    // $link ->query("call call_user(id, n, e, c)");


?>