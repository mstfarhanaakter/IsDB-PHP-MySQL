<?php 
  session_start();
  if(!isset($_SESSION['username'])){
    header("location:login.php"); // লগইন না করলে রিডাইরেক্ট
    exit;
  }
?>


<h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
<a href="logout.php">Logout</a>