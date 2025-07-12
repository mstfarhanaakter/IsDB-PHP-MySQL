<?
    echo '<pre>';
    print_r($_FILES);
   echo ' </pre>';
   if(isset($_FILES['img'])){
    $file_name = $_FILES['img']['name'];
    $temp_name = $_FILES['img']['tmp_name'];
    $file_size = $_FILES['img']['size'];
    $image = 'media/';
    $kb = $file_size/1024;

    if ($kb >400){
        echo "File is too large";
    }else{
        move_uploaded_file($tmp_name,$image.$file_name);
        echo "Successfully";
    }

   }
?>

<body>
    <form action="#" enctype="multipart/form-data" method="post">
    <div>
        Upload:
        <input type="file" name="img">
        <br>
        <br>
        <input type="submit" value="Submit" name="submit">
        <?php
            if(isset($_POST['submit'])){
            echo "<br>";
            echo "<img src='media/$name' width='400px' >";
        }
        ?>
        
    </div>
    </form>
   
</body>