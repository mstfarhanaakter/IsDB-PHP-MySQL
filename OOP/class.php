<?php 
class Car {
    // properties
    public $name = "BMW ";
    public $color = "Black";
    
    // Methods
    public function info($name, $color) {
        $this->name = $name;
        $this->color = $color;
        return $this->name . ' ' . $this->color;
    }
}

$var = new Car();
echo $var->name.''. $var->color;
echo "<br>";
echo $var->info("Audi", "Black");
?>
