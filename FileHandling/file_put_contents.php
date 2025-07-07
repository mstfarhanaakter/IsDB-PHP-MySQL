<pre>
    1. এই লাইনে file_put_contents() ফাংশন ব্যবহার করে "store.txt" নামের একটি ফাইলে "hi" লেখা হচ্ছে।
            a. যদি ফাইলটা না থাকে, তাহলে সেটা তৈরি হবে।
            b. এই ফাংশনটি সফলভাবে কয়টা বাইট লেখা হয়েছে, সেটা রিটার্ন করে।
            c. অর্থাৎ, এখানে "hi" লেখায় ২ বাইট লেখা হয়েছে, তাই output হবে 2।
    2. $data = "This is our php class";
            এখানে $data নামে একটি ভেরিয়েবল তৈরি করা হয়েছে এবং সেটিতে একটি স্ট্রিং মান রাখা হয়েছে:
            "This is our php class"
</pre>
<?php 
    echo file_put_contents("store.txt", "hi");

    echo "<br>";
    $data = "This is our php class";
    echo $data;
    print_r(explode("", $data,2));
    
?>