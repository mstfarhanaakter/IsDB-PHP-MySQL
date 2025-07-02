<?php 
    try{
        throw new Exception("Try catch error message");
    }
    catch(Exception $e){
        echo $e->getMessage();
    }

?>