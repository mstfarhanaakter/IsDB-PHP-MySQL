<?php 
 abstract class Car {
    abstract function start();
    public function stop(){
        return " The car has stopped <br>. ";
    }
 }

 class Car2 extends Car {
    public function start(){
        return "The car has start\n";
    }
 }
 $new = new Car2();
 
 echo $new -> start();
 echo $new -> stop();
 
?>