<?php 
    interface User{
        public function login();
    }

    class userLogin implements User{
        public function login(){
            return "This is interface of Object-Oriented Program";
    }
}
$n = new userLogin();
echo $n->login();

?>