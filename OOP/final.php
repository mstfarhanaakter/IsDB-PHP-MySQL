<?php 
    final class A {
        public static $name;
        public function hello() {
            return "This is for final Keyboard";
    }
}
$a = new A();
echo $a->hello();

class A {
        public static $name;
        public function hello() {
            return "This is for final Keyboard";
    }
}
$a = new A();
echo $a->hello();


?>