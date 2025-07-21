<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:login.php");
    exit;
}

// Load dependencies FIRST
require_once 'studentClass.php';
require_once 'ExtendClass.php';

use ParentClass\ExtendClass;

// Load HTML headers, navbar, etc.
require_once "includes/phpheader.php";
require_once "includes/css.php";
require_once "includes/navbar.php";
echo "<br>";

// Handle form submission
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $id = $_POST['id'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['add'];

    $file_name = $_FILES['upload']['name'];
    $temp_name = $_FILES['upload']['tmp_name'];
    $file_size = $_FILES['upload']['size'];
    $file_extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    $uploadDir = 'media/';
    $allow_ext = ['jpg', 'jpeg', 'png'];
    $max_size_kb = 400;

    if (!in_array($file_extension, $allow_ext)) {
        echo "<p style='color:red;text-align:center;'>Only JPG, JPEG, PNG files are allowed.</p>";
    } elseif ($file_size / 1024 > $max_size_kb) {
        echo "<p style='color:red;text-align:center;'>File is too large. Max size is 400KB.</p>";
    } else {
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir);
        }

        if (move_uploaded_file($temp_name, $uploadDir . $file_name)) {
            echo "<p style='color:green;text-align:center;'>File uploaded successfully!</p>";
        } else {
            echo "<p style='color:red;text-align:center;'>Failed to upload the file.</p>";
        }
    }

    $isEmailValid = preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,6}$/', $email);
    $isPhoneValid = preg_match('/^\+?[0-9]{7,11}$/', $phone);

    if ($isEmailValid && $isPhoneValid) {
        $data = new ExtendClass($name, $id, $email, $phone, $address, $file_name);
        $data->store();
        echo "<p style='text-align:center;color:green;'>Data submitted successfully!</p>";
    } else {
        echo "<h4 style='color:red'>Your Email and/or Phone number are invalid</h4>";
    }
}

// Now safely use ExtendClass::print()
echo '<div class="flex-container">';

echo '<div class="form">';
require_once "includes/formData.php";
echo '</div>';

echo '<div class="student-info-container">';
ExtendClass::print();
echo '</div>';

echo '</div>'; // flex-container
?>

<?php require_once "includes/footer.php"; ?>