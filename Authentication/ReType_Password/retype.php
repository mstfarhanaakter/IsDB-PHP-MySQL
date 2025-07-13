<form action="#" method="post">
    <input type="password" placeholder ="Password" name="pass" required id="pass">
    <br>
    <br>
    <input type="password" placeholder="Retype Password"name="repass" required id="repass">
    <br>
    <br>
    <input type="checkbox" id = "showpass" onclick="togglePassword()">Show Password
    <br>
    <br>

    <button name="submit">Submit</button>
</form>

<?php 
    if(isset($_POST['submit'])){
        $pass = $_POST['pass'];
        $repass = $_POST['repass'];

        if ($pass !== $repass){
            echo "You have entered wrong password";
    }else{
        echo " Password is right";
    }
}
?>

<script>
    function togglePassword(){
        let pass = document.querySelector('#pass');
        let repass = document.querySelector("#repass");

        if(pass.type ==="password"){
            pass.type = "text";
            repass.type = "text"; 
        }else{
            pass.type = "password";
            repass.type = "password";
        }
    }

</script>