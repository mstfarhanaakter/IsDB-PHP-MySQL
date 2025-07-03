<h1>Find out grade</h1>
<form action="" method="post">
    Enter Grade: 
    <input type="text" name="n">
    <input type="submit" name="submit">
</form>

<?php 
    if(isset($_POST["submit"])){
        $result = $_POST["n"];
        
    if($result >=80 && $result <=100){
        $grade = "5.00 (A+)";
    }else if($result >=70){
        $grade = "4.00 (A)";
    }else if($result >=60){
        $grade = "3.50 (A-)";
    }else if($result >= 50){
        $grade = "3.00 (B)";
    }
    else if ($result >= 40){
        $grade = "2.50 (C)";
    }else{
        $grade = "0.00 (F)";
    }
        echo "<h3>Your grade point is: $grade</h3>";
    }
?>

<!-- <?php
    if (isset($_POST['submit'])) {
        $result = $_POST['n'];
        $grade = "";

        
        switch (true) {
            case ($result >= 80 && $result <= 100):
                $grade = "5.00 (A+)";
                break;
            case ($result >= 70):
                $grade = "4.00 (A)";
                break;
            case ($result >= 60):
                $grade = "3.50 (A-)";
                break;
            case ($result >= 50):
                $grade = "3.00 (B)";
                break;
            case ($result >= 40):
                $grade = "2.00 (C)";
                break;
            case ($result >= 33):
                $grade = "1.00 (D)";
                break;
            case ($result >= 0):
                $grade = "0.00 (F)";
                break;
            default:
                $grade = "Invalid input!";
        }

        echo "<h3>Your Grade Point is: $grade</h3>";
    }

?> -->