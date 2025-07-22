<?php
$database = mysqli_connect("localhost","root","","college" );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

</head>
<body>
    <div class="container">
       <h1 class="">Client Information</h1>
    <table class="table table-success table-striped" style="margin:30px auto">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th
      <th scope="col">Contact</th>
      <!-- <th scope="col">Color</th> -->
    </tr>
 
    <?php
    $student = $database->query("select * from student");
      while(list($id,$name,$email,$contact)=  $student->fetch_row()){
     
   echo  "<tr>
      <th>$id</th>
      <td>$name</td>
      <td>$email</td>
      <td>$contact</td>
    </tr>";
       
      }
      ?>
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</body>
</html>