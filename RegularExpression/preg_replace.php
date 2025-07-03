<?php
    $str = "Visit Microsoft! Got it!";
    $pattern = "/microsoft/i";
    echo preg_replace($pattern, "Germany or any other european country", $str);
?>