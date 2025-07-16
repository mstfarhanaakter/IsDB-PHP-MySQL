<?php
$file = fopen("new.txt", "w") or die("Unable to open file");
echo fread($file, filesize("new.txt"));
fclose($file);
?>