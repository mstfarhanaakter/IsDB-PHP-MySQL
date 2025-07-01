<?php
    class User{
        protected $salary;

        protected function getSalary(){
            return "Hey, This is protected access modifier <br>";
        }
    }
    // $new = new User();
    // echo $new ->info();

    class B extends User{
        public function showSalary(){
            return $this -> getSalary();
        }
    }
    $new = new B();
    echo $new->showSalary();
 ?>