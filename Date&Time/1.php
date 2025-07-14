<?php 
    echo "Today is ".date("F d, Y");

    echo "<br>";

    echo "Today is " .date("l");

    echo "<br>";

    $weekday = date("l");  // বর্তমান সপ্তাহের দিনের নাম
    $daynumber = date("jS"); //বর্তমান দিনের সংখ্যা (1, 2, 3...) এর সাথে Ordinal Suffix (st, nd, rd, th) যোগ করে দেয়।
    $monthYear = date("F Y"); //বর্তমান মাসের নাম (পূর্ণ নামে) এবং বছর বের করা হয়।

   printf("Today is %s the %s day of %s", $weekday, $daynumber, $monthYear);

//    এখানে %s হলো placeholder, যা সাধারণত PHP, Python, C, ইত্যাদি প্রোগ্রামিং ল্যাঙ্গুয়েজে ব্যবহার করা হয় কোনো string ভ্যালু বসানোর জন্য।

//Working with time

echo "<br>";
echo "The time is " .date("h:i:s");

echo "<br>";
echo "The time is " .date("h:i:sa");

echo "<br>";
echo "The time is " .date("H:i:s");



echo "<br>";
$time = gettimeofday();  //gettimeofday() দিয়ে আপনি জানতে পারছেন সার্ভার কোন টাইমজোনে আছে।
$x = $time['minuteswest'] /60;
printf("server location is %d hours west of UTC.", $x);

?>