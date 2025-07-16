<h1>Trait</h1>

<?php 
    trait A{
        public function into(){
            echo " This is into ";
        }
        public function details(){
            echo "This is details";
        }
    }
    trait B{
        public function show(){
            echo " This is show";
    }
}
trait C{
    public function display(){
        echo " This is display";
}
}
class Main{
    use A, B, C;
    public $name;
    public function addition(){
        echo 10+45;
    }
}
$obj = new Main();
echo $obj->addition(); // class
echo $obj->show(); // trait B
echo $obj->into(); // trait A
echo $obj->details(); // trait A
echo $obj->display(); //trait C



?>