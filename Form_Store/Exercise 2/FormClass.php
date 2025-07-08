<?php 
    class FormData{
        public $first_name, $last_name, $email , $password;

        private static $file_name = "DataStorage.txt";

        public function __construct($fname, $lname, $e, $p){
            $this->first_name= $fname;
            $this->last_name = $lname;
            $this->email = $e;
            $this->password = $p;
        }

        public function output(){
            return $this->first_name . ", ". $this->last_name .", ". $this->email .", ". $this->password.PHP_EOL;
        }

        public function dataStore(){
            file_put_contents(self::$file_name, $this->output(), FILE_APPEND);
        }

        // display on browser
        public static function display(){
            $studnets = file(self::$file_name);

        }
    }
?>