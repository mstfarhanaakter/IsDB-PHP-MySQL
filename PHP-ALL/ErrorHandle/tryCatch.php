<?php 

    $a = 10;
    try{
        if($a<30){
            throw new Exception("Valid Number");
        }
        else{
            throw new Exception("invalid Number");
        }

    }
    catch(Exception $e){
        echo " Your error is: ". $e->getMessage() ."<br>";
        // echo $e->getMessage();
    }
    finally{
        echo "This is finally done my work ";
    }

?>