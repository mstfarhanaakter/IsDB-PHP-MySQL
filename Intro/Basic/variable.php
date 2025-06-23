<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local Variable</title>
</head>
<body>
    <?php
        //Local Variable
        function info(){
            $a = 12;
            
            echo "This local variable number is "."". $a++;
            
        }
        info();

        echo "<br>";
     ?>

    
     <!-- global variable  -->
     <?php
     $b ="15";
        function info1(){
            // PHP-তে ফাংশনের ভিতর বাইরের ভ্যারিয়েবল সরাসরি কাজ করে না।
        global $b; //  1. global কীওয়ার্ড ব্যবহার করা বাইরের ভ্যারিয়েবলকে অ্যাক্সেস করতে
        echo "The global variable number is " .$b;
        
                };
        info1();

        //
        echo "<br>";

        $c = "12";

        function info2() {
         echo "The second global variable is ".$GLOBALS['c']; 
            };

        info2(); // Output: 12
      ?>
<h1>super gloabl variable </h1>

    <?php 
        echo $_SERVER['SERVER_NAME']; //It shows the host name or domain name in header url box 
        echo"<br>";
        echo $_SERVER['SCRIPT_NAME']; // ইউজার যে ফাইলটি অ্যাক্সেস করেছে সেটার পথ (path) রিটার্ন করে।
        echo"<br>";
        echo $_SERVER['SERVER_ADDR']; // Localhost IP address (IPv6 এর জন্য, সমতুল্য 127.0.0.1)
        echo"<br>";
        echo $_SERVER['SERVER_PORT']; // Server port (default HTTP port)

        echo "<br>";
    ?>
  
</body>
</html>