<style>
    label{
        display:inline-block;
        width: 100px;
    }
    form{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }
</style>
<body>
    <form action="" method="POST">
        <label for="">ID</label>
        <input type="text" name="id">
        <br>
        <br>
        <label for="">Name</label>
        <input type="text" name="name">
        <br>
        <br>
        <label for="">Email</label>
        <input type="text" name="email">
        <br>
        <br>
        <label for="">Contact</label>
        <input type="text" name="contact">
        <br>
        <br>
        <input type="submit" name="submit">
    </form>
</body>

<?php 
    require_once"config.php";
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $connect =$link ->query("call call_user('$id', '$name', '$email', '$contact')");
        if($connect){
            header("location: config.php");
        }else{
            echo "Could not found";
        }
    }
    

?>