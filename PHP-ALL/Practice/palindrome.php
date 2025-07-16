<?php 

//The strrev() function in PHP is used to reverse a string.

    function isPallindrome($str){
        $reversed = strrev($str);
        return $str === $reversed;

    }
    echo isPallindrome("madam")? "Palindrome": "Not a Palindrome";

?>