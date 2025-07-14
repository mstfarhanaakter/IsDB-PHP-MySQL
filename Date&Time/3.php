<?php

$date = new DateTime(); // এখনকার সময়
echo $date->format('Y-m-d H:i:s'); 
echo "<br>";
?>


🔹 উদাহরণ ১: বর্তমান তারিখ ও সময়

<?php

echo "<br>";
$now = new DateTime();
echo $now->format('l, jS F Y h:i A');
echo "<br>";
?>

🔹 উদাহরণ ২: নির্দিষ্ট তারিখ তৈরি করা
<?php

echo "<br>";
$deadline = new DateTime('2025-07-14');
echo $deadline->format('Y-m-d');
echo "<br>";

?>

🔹উদাহরণ ৩: ২টি তারিখের মধ্যে পার্থক্য

<?php

$now = new DateTime();
$deadline = new DateTime('2025-07-9');
echo "<br>";
$interval = $now->diff($deadline);
echo "Time left: " . $interval->format('%a days');
echo "<br>";

?>

🔹 উদাহরণ ৪: টাইমজোন সেট করা

<?php
echo "<br>";
$dhaka = new DateTime('now', new DateTimeZone('Asia/Dhaka'));
echo $dhaka->format('Y-m-d H:i:s');
echo "<br>";

?>

🔹 উদাহরণ ৫: তারিখে দিন/মাস/বছর যোগ বা বিয়োগ করা


<?php
echo "<br>";
$date = new DateTime('2025-07-14');
$date->modify('+5 days');
echo $date->format('Y-m-d'); // 2025-07-19
echo "<br>";

?>

