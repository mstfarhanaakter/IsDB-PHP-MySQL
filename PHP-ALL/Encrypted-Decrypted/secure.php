<pre>
    In PHP, md5() is a built-in function that generates a 32-character
     hexadecimal hash from a given string using the MD5 hashing algorithm.
</pre>

<?php
$paasword = "admin123";
$m = md5($paasword);
echo $m;
echo "<br>";
echo strlen($m);

echo "<br>";
echo "sha1()";


//sha1()
echo "<br>";
$m1 = sha1($paasword);
echo $m1;
echo "<br>";
echo strlen($m1);

//hash()

echo "<br>";
echo "hash()";
echo "<br>";
$input = "hello123";
$hash = hash("sha256", $input);
echo $hash;

//base64_encode()

$s = base64_encode($paasword);
echo $s;
echo "<br>";
echo strlen($s);

echo "<br>";
echo base64_decode("YWRtaw4=");

?>