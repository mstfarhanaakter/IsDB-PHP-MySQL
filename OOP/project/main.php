<?php
require_once 'App/Employee.php';  // Include the class file

use App\Employee;  // Import the class with namespace

$emp = new Employee();
echo $emp->getInfo();  // Output: Hello from App\Models\Employee

?>