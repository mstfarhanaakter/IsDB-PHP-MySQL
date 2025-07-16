<?php
class E {
    public function greet() {
        echo "Hello<br>";
    }
}

$obj = new E();
$obj->greet();

class F extends E {
    public function greet() {
        echo "Hi, Bro!";
    }
}

$obj1 = new F();
$obj1->greet();
?>
