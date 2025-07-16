<?php
// Base class
class Employee {
    protected $wage;

    // Method to set the wage
    public function setWage($amount) {
        $this->wage = $amount;
    }

    // Optional: Method to get the wage
    public function getWage() {
        return $this->wage;
    }
}

// Derived class
class Programmer extends Employee {
    // Method to calculate and display bonus
    public function bonus($percent) {
        $bonus = $this->wage * $percent / 100;
        echo "Bonus = " . $bonus . "\n";
    }
}

// Example usage
$prog = new Programmer();
$prog->setWage(5000);     // Set base wage
echo "Wage = " . $prog->getWage() . "\n";
$prog->bonus(10);         // Calculate 10% bonus
?>
