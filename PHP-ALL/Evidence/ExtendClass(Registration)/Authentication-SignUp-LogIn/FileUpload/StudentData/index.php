<?php 
  session_start();
  if(!isset($_SESSION['username'])){
    header("location:../../login.php"); // লগইন না করলে রিডাইরেক্ট
    exit;
  }
?>

<?php 
require_once "header.php";
require_once "navbar.php";
require_once "css.php";
echo "<br>"; 
require_once "formInput.php";


?>


<?php
require 'studentClass.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $id = $_POST['id'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Email and phone validation

    $isEmailValid = preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,6}$/', $email);
    $isPhoneValid = preg_match('/^\+?[0-9]{7,11}$/', $phone);

    if ($isEmailValid && $isPhoneValid) {
        // echo "<h4 style='color:green'>Your Email and Phone number are valid</h4>";

        $data = new StudentInfo($name, $id, $email, $phone);
        $data->store(); // Save to data.txt
        echo "<p style='text-align:center;color:green;'>Data submitted successfully!</p>";
    } else {
        echo "<h4 style='color:red'>Your Email and/or Phone number are invalid</h4>";
    }
}

StudentInfo::print();

?>


<?php require_once "footer.php"; ?>