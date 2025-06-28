<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class</title>
</head>
<body>
    <h1>Construct</h1>
    <p>A constructor is a special method that is automatically 
        called when a new object is created.</p>
    <?php
    class Fan{
        public $name;
        public $color;
     function __construct($name, $color){
        $this->name =$name;
        $this->color = $color;
    }

    function work(){
        return "The fan name is ". $this->name ."". " and its color ".$this->color;
    }
    }

    $var = new Fan("GFC", "Whie Off");
    echo $var->work();
    ?>
</body>
</html>