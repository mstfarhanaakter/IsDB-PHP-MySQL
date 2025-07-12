
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
        $image = "media/";
        
        move_uploaded_file($tmp_name, $image. $name );

       }else{
        echo "Please Select a file! ";
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
            echo "<br>";
            echo "<img src='media/$name' width='400px' >"; 
        }
    ?>
    </div>

    
    
</body>
