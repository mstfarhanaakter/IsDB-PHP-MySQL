<?php 
    class Employee{
        private $name;
        private $title;
        public function getName(){
            return $this->name. " ".$this->title ;
           
        }
        public function setName($name,$title){
            $this->name = $name;
            $this->title = $title;
    }
    public function sayHello(){
        echo "Hi, my name is {$this ->getname()}.";
    }
}
$obj = new Employee();
echo $obj ->setName("Farhana","Unemployed");
echo $obj->sayHello();  

?>