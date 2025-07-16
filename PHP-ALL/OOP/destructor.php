<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destructor</title>
</head>
<body>
    <h1>destructor</h1>
    <p>A destructor is a special method in a class that runs automatically 
        when an object is about to be destroyed or removed from memory.

</p>
    <?php 
        class Test{
            function __destruct(){
                echo "Destruct is called ";
            }
            function __construct(){
                echo "Construct is called ";
            }
        }
        $var = new Test();
        echo "Doing something\n ";

    ?>
</body>
</html>