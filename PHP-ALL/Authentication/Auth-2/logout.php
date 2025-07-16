<?php
    session_start();
    session_unset();    // সেশন ডেটা পরিষ্কার
    session_destroy();  // সেশন শেষ
    header("location:login.php");
    exit;
?>