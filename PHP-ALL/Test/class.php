<?php 
     class Student{
        public $id;
        public $name;
        public $batch;
        public static $file = "DataStore.php";

        public function __construct($id,$name,$batch){
            $this->id = $id;    
            $this->name = $name;
            $this->batch = $batch;

            echo "Student Created : ID={$this->id}, Name= {$this->name}, Batch= {$this->batch} <br>";
     }
    }

?>