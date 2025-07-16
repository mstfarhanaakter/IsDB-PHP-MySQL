<pre>

</pre>

<?php 

    $str = "The rain in Spain falls mainly on the plains";
    $pattern = "/in/i";
    //i হলো একটি modifier, যার মানে হলো case-insensitive (বড় হাতের বা ছোট হাতের অক্ষর – উভয়ই মিলবে)।
    // উদাহরণ: IN, In, iN, in — সবকটাই মিলবে।
    
    echo preg_match_all($pattern, $str);

?>