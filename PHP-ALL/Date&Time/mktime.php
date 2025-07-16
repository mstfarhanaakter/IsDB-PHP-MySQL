<pre>
    mktime() হল PHP-এর একটি ফাংশন যা Unix timestamp তৈরি করে — 
    অর্থাৎ একটি নির্দিষ্ট তারিখ এবং সময়কে সেকেন্ডে গণনা করে 1970-01-01 00:00:00 UTC থেকে।

    mktime(hour, minute, second, month, day, year)
</pre>

<?php 
    $now = time();
    $x = mktime(0,0,0,7,14,2025);

    //difference in seconds

    $difference = $x -$now;

    //calculate total hours

    $hours = round($difference /60/60);
    echo "Only " .number_format($hours)." hours until task deadline!";
?>