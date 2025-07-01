<?php 
    class User{
        const name = "Hello, World!". "<br>";

        public static function login(){
            echo "This is static method <br>";
    }
}
// $person = new User();
// $person->info();

echo User::login(); // Correct way to call static method
echo User::name;  // Accessing constant

class S{
    public static $value = 45;
    public function staticValue(){
        return self :: $value; // :: scope resolution operator      
    }
}
$w = new S();
echo $w -> staticValue();

?>