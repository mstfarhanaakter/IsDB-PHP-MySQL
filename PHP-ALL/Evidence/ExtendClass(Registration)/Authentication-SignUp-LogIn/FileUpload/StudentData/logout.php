<?php
session_start();
$username = $_SESSION['username'] ?? 'Guest';

session_unset();
session_destroy();
?>

<!-- <!DOCTYPE html>
<html>
<head>
    <title>Logged Out</title>
</head>
<body>
    <h2>You've been logged out. To access your account, please log in again, 
        <?php echo htmlspecialchars($username); ?>!</h2>
    <a href="login.php">Log in again</a>
</body>
</html> -->

<?php 
    header("Location:login.php");
    exit;
?>
