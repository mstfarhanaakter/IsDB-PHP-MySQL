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
        print strlen("Country");
        echo "<br>";
        function name(){
            return substr("Bangladesh",0, 10); 
        }
        print name();
        print "<br>";
        print "Hello bro, How are you?";
        // echo substr("Bangladesh",0, 4); 
        # substr(string $string, 
        # int $start, int $length = null): string
        print "<br>";
        $text = "Hello, I am learning php to increase my knowledge."; 
        print str_word_count($text);
    ?>
    
</body>
</html>