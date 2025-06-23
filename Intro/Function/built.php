<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Built</title>
</head>
<body>
    <h1>Built in Function</h1>
    <?php 
        
        print strlen("Country"); // string length
        echo "<br>";
        function name(){
            return substr("Bangladesh",0, 10); // (sring,start, length)
        }
        print name();
        print "<br>";
        print "Hello bro, How are you?";
        // echo substr("Bangladesh",0, 4); 
        # substr(string $string, 
        # int $start, int $length = null): string
        print "<br>";
        $text = "Hello, I am learning php to increase my knowledge."; 
        print str_word_count($text); //string word count
        echo "<br>";
        echo strrev($text); // string reverse
        echo "<br>";
        echo strtolower($text);
        echo "<br>";
        echo strtoupper($text);
        echo "<br>";
        function name1(){
        $st = "This is php module and is add another module mysql.". "". "<br>";
            return str_repeat($st ,3); // string repeat 
            };
           echo name1();
        function name2(){
            $sst = "this is php module and is add another module mysql.";
            return str_replace("php","javascript", $sst); // str replace 
        };
        echo name2();

       
    ?>
</body>
</html>