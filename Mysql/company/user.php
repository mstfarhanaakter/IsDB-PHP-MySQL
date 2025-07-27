<style>
    label{
        display:inline-block;
        width: 100px;
    }
    .form1{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        border:1px solid black;
        padding: 10px;
        background-color:#bde0fe;      

    }
    .form2{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        border:1px solid black;
        padding: 10px;
        background-color:#b0c4b1;

    }
    div{
        display:flex;
        justify-content:center;
        gap:50px;
        /* align-items:space between; */
    }
    input{
        padding:10px;
    }
</style>
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
<body>
    <div>
    <form action="" method="POST" class="form1">
        <label for="">ID</label>
        <input type="text" name="id">
        <br>
        <br>
        <label for="">User Name</label>
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

    <form action="" method="POST" class="form2">
        <label for="">Id</label>
        <input type="text">
        <br>
        <br>
        <label for="">Brand Name</label>
        <input type="text">
        <br>
        <br>
        <label for="">Price</label>
        <input type="text">
        <br>
        <br>
        <label for="">User ID</label>
        <input type="text">
        <br>
        <br>
        <input type="submit" value="Insert">
    </form> 
    </div>
</body>