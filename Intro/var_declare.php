<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Var Declaretion</title>
</head>
<body>
    <h1>Hello</h1>
    <?php
     $a = "Hello, ";
     $color = "Hi ";
     $Color = "I am ";
     $COLOR = "Farhana";
    //  echo ("$a")
    # echo $a . "" . $color . "". $Color . "". $COLOR

    //string
    $c = "Farhana ";
    $d = "Shetu";
    # echo $c . $d ;

    var_dump ($c);  // show the type of data 
    echo "<br>";

    //float
    $num = 24334.3565;
    var_dump ($num);

    //integer
    $num1 = 234;
    echo "<br>";
    var_dump($num1);

    //binary
    $B = 0b101011;

    //Hexadecimal
    $H = 0x1233453;
    
    //octal
    $O = 0755;
    var_dump($B);
     echo "<br>";
    var_dump($H);
    echo "<br>";
    var_dump($O);

    //boolean
    $b = true;
     echo "<br>";
    var_dump($b);

    //array 
    $array = array("A", "B", "C");
    echo "<br>";
    var_dump($array);

    // object
    echo "<br>"; 
    class Student{
        public $name;
        public $age;

        public function __construct($name,$age) {
        $this->name = $name;
        $this->age = $age;
        }
    }
    $obj = new Student ("Farana", " 25");
    var_dump($obj);

     
    ?>
   
</body>
</html>