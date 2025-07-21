<?php 
  session_start();
  if(!isset($_SESSION['username'])){
    header("location:login.php"); // লগইন না করলে রিডাইরেক্ট
    exit;
  }
?>


<!-- <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
<a href="logout.php">Logout</a> -->

<?php
// header 
require_once "includes/phpheader.php";
require_once "includes/css.php";
require_once "includes/navbar.php";
echo "<br>";
?>



<?php
//form data
require_once "includes/formData.php";
?>



<?php
require_once 'studentClass.php';
require_once 'ExtendClass.php';

use ParentClass\ExtendClass;  // আমরা App নেমস্পেস থেকে ExtendClass কে আনছি।

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $id = $_POST['id'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['add'];

    // handle file upload 

    $file_name = $_FILES['upload']['name'];
    $temp_name = $_FILES['upload']['tmp_name'];
    $file_size = $_FILES['upload']['size'];
    $file_extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    $uploadDir = 'media/';


    //only allow extension
    $allow_ext = ['jpg', 'jpeg', 'png'];
    $max_size_kb = 400;

    //file size constrain

    if (!in_array($file_extension, $allow_ext)) {
        echo "<p style='color:red;text-align:center;'>Only JPG, JPEG, PNG files are allowed.</p>";
    } elseif ($file_size / 1024 > $max_size_kb) {
        echo "<p style='color:red;text-align:center;'>File is too large. Max size is 400KB.</p>";
    } else {
        // Create upload directory if not exists

        if (!is_dir($uploadDir)) {
            mkdir($uploadDir);
        }

        if (move_uploaded_file($temp_name, $uploadDir . $file_name)) {
            echo "<p style='color:green;text-align:center;'>File uploaded successfully!</p>";
        } else {
            echo "<p style='color:red;text-align:center;'>Failed to upload the file.</p>";
        }
    }




    // Email and phone validation

    $isEmailValid = preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,6}$/', $email);
    $isPhoneValid = preg_match('/^\+?[0-9]{7,11}$/', $phone);

    if ($isEmailValid && $isPhoneValid) {
        // echo "<h4 style='color:green'>Your Email and Phone number are valid</h4>";

        $data = new ExtendClass($name, $id, $email, $phone, $address, $file_name);
        $data->store(); // Save to data.txt

        echo "<p style='text-align:center;color:green;'>Data submitted successfully!</p>";
    } else {
        echo "<h4 style='color:red'>Your Email and/or Phone number are invalid</h4>";
    }
}

ExtendClass::print();




?>

<?php
require_once "includes/footer.php";
    ?>