<pre>
    <h2>The preg_match() function in PHP is used to perform a regular expression match. 
    It checks whether a string matches a pattern and returns:</h2>
    <b>1</b> 1 if the pattern matches
    <b>2</b> 0 if it does not match
    <b>3</b> false if an error occurred

    syantx //
</pre>

<?php 
    //preg_match (pattern, uinput, matches, flags, offset)
    
    $str = "Returns a new string where matched pattern have been replaced with another string";
    $pattern = "/string/";
    echo preg_match($pattern, $str);
?>