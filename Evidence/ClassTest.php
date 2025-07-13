<style>
    div{
        display:flex;
        align-items:center;
        justify-content:center;
    }
    label{
        width: 100px;
        display:inline-block;
    }
    form{
        border:1px solid black;
        padding:15px;
        width:25%;
        margin-top:10px;
        background-color:#9CB380;
    }
    input{
        padding:10px;
    }
    button{
        border:none;
        background-color:#D4E09B;
        padding:10px;
        font-weight:bold;
        text-transform: uppercase;
        cursor:pointer;
    }
</style>
<div>
<form action="" method="post">
    <label for=""><b>Email</b></label> <input type="text" name="email" required>
    <br>
    <br>
    <label for=""><b>Contact</b></label><input type="text" name="no" required>
    <br>
    <br>
    <label for=""><b>Password</b></label> <input type="password" required name="pass">
    <br>
    <br>
    <button name="submit">Submit</button>
</form>
</div>

<?php 
    if(isset($_POST["submit"])){
        $email = $_POST["email"];
        $contact = $_POST["no"];
        $password = $_POST["pass"];
    
        if(preg_match("/^[a-zA-Z0-9_.-][@][a-z][.][a-z]{2,6}$/", $email)){
            echo "<p style='color:green'>Your email is valid</p>", $email;

            }else{
                echo "<p style='color:red'>Your email is invalid</p>";
            }
            if (preg_match('/^\+?[0-9\s]{7,}$/', $contact) && strlen($contact)>=7){
                echo "<p style='color:green'>Your phone no is valid</p>", $email;
            }else{
                echo "<p style='color:red'>Your phone no is valid</p>", $contact;
            }
}
?>