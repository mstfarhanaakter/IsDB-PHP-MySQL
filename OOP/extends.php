<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extends</title>
</head>
<body>
    <h1>Extends</h1>
    <p>The extends keyword is used when one class inherits from another.

</p>
    <?php 
       
        class A {
            public $address;
            public $email;
            function __construct($address, $email) {
                $this->address = $address;
                $this->email = $email;
        }
        function fullInfo(){
            return $this->address. " ". $this->email;
        }
    };
    $var = new A ("Dhaka", "farhana@gmail.com");
    echo $var->fullInfo();

    echo "<br>";
    class B extends A {
        public $name;
        public $board;
        function __construct($name, $board, $email, $address) {
            parent:: __construct($address, $email);
            $this->name = $name;
            $this->board = $board;
        }
        function fullInfo() {
            return "My name is ". $this->name." ". " and my board is ". $this->board. "". "now I live in  " . $this->address . " ". " my email is " . $this->email;
        }
    
    }
    $c = new B("farhana", "Rajshahi", "farhana@gmail.com", "Dhaka");
    echo $c->fullInfo();

    

    ?>
</body>
</html>