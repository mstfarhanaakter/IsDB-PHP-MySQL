<?php 
    class A{
        public static $name = "Hello, this is Static with Inheritence";
        public function staticValue(){
            return self ::$name; // Accessing static property from within the same class
        }
        public static function see(){
            return "This is static to see";
        }
        function view(){
            return self ::$name;
        }
    }

    class B extends A{
        public function myStatic(){
            
            return parent :: $name;  // Access static property from parent
            return parent :: see();
            return $this ->view();
        }
    }

    $a = new B();
    echo $a -> myStatic();
    echo "<br>";
    echo $a ->see();
    echo "<br>";
    echo $a -> view();


?>