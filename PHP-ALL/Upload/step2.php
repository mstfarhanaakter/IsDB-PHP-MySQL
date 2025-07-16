<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<style>
    form{
        border:1px solid slateblue;
        width: 25%;
        padding: 5px;
    }
    div{
         display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        text-align: center;
    }

    .image{
        width: 400px;
        margin:10px auto;
    }
</style>
<?php 

       if(isset($_POST['submit'])){
        $name = $_FILES['myfile']['name'];
        $tmp_name = $_FILES['myfile']["tmp_name"];
        
        copy($tmp_name, "media/". $name );

       }
    
    ?>
    
<body>
    <div>
        <div class="image"></div>
    <form action="#" method="post" enctype="multipart/form-data">
        <input type="file" name="myfile">
        <br>
        <br>
        <input type="submit" value="Upload File" name="submit">
    </form>
    <?php
        if(isset($_POST['submit'])){
            echo "<img src='media/$name' width='400px' >";
        }
    ?>
    </div>

    
    
</body>
</html>