<?php 
    abstract class Vehicle {
    // Abstract method (no body)
    abstract public function startEngine();

    // Concrete method (with body)
    public function stopEngine() {
        return "Engine stopped";
    }
}

class Car extends Vehicle {
    // Must implement abstract method
    public function startEngine() {
        return "Car engine started";
    }
}

$myCar = new Car();
echo $myCar->startEngine();  // Outputs: Car engine started
echo $myCar->stopEngine();   // Outputs: Engine stopped

// This will cause an error:
// $v = new Vehicle(); // Fatal error: Cannot instantiate abstract class Vehicle


?>