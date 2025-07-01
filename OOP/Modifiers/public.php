<?php 
    class User{
        public $name;
        public $city;

        public function infor($name, $city){
            $this -> name = $name;
            $this -> city = $city;
            return $this->name . " ". $this -> city;
        }
    }
     $user  = new User();
     echo $user ->infor("I am Farhana", "And I am from Bogura")


?>