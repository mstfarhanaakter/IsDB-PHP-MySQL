<?php 
class A {
    public static $name = "Hello, this is Static with Inheritance";

    public function staticValue() {
        return self::$name; // Accessing static property from within the same class
    }

    public static function see() {
        return "This is static to see";
    }

    public function view() {
        return "This is view";
       // return self::$name; 
    }
}

class B extends A {
    public function myStatic() {
        $output = "";

        // Access static property from parent
        $output .= parent::$name . "<br>";

        // Access static method from parent
        $output .= parent::see() . "<br>";

        // Call non-static method from parent
        $output .= parent::view();

        return $output;
    }
}

$a = new B();
echo $a->myStatic();    // Outputs all three values
?>
