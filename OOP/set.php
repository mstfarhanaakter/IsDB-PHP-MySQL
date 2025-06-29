<?php 
    class A {
        public $name;
        public $color;
    function set_name($name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }
};
    $obj = new A();
    $obj ->set_name("Farhana");
    echo $obj ->get_name();

?>