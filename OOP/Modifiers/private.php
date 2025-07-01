<?php 
    class User{
        private $name;

        private function info($name){
            $this -> name = $name;
            return $this->name;
        }

        public function secretExpose($name){
            return $this ->info($name);
        }
    }
    $w = new User();    
    echo $w->secretExpose("Hi, I am Farhana Shetu.");

?>