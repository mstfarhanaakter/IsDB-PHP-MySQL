<style>
    
    div{
        display:flex;
        align-items:center;
        justify-content:center;
    }

    form{
        border:2px solid #6864F7;
        padding:15px;
        align-items: center;
        display: flex;
        flex-direction: column;
        /* border-radius: 10px 0 20px 5px; */
         border-radius: 50px 5px 50px 5px;

    }
    form .check {
    align-self: flex-start; /* Override center alignment for this item only */
}
    input{
        padding:15px;
        width: 100%;
        border:1px solid #6864F7;
    }
    button{
        display:flex;
        align-items:center;
        justify-content:center;
        border:none;
        background-color:#C99BF7;
        padding:10px;
        font-size:18px;
        border-radius:12px;
        width:45%;
        letter-spacing:2px;
        font-weight:bold;
        font-family:courier;
        cursor: pointer;
        

    }
    button:hover{
        background-color:#6864F7;
        color:white;
    }
    p{
        font-family:MV boli;
        color:#052A75;
        
    }
    .p{
        font-family: Lucida Handwriting;
    }
    .check{
    display: flex;
    justify-content: flex-start; /* align left */
    align-items: start;
    color: #052A75;
    font-family: MV Boli;
    font-size: 14px;
    font-weight: bold;
        
    }

</style>
<body>
    <?php 
        echo isset($msg)?$msg:"";
    ?>
    <div>
        <form action="#" method="post">
            <img src="spiderweb.gif" alt="" width="100px">
            <p>Be bold. Be first. Sign up!</p>
            <input type="text" placeholder="Your Username" name="user">
            <br>
            <input type="password" placeholder="Your Password" name="pass" id="pass">
            <br>
            <input type="password" placeholder="Confirm Your Password" name="repass" id="repass">
            <br>
            <input type="text" placeholder="Your Email (Optional)" name="email">
            <br>
            <div class="check">
            <input type="checkbox" id = "showpass" onclick="togglePassword()">Show Password
            </div>
            <br>
            <p class="p">Already with us? <a href="login.php">Sign in to continue.</a></p>
            <button name="submit">SUBMIT</button>
        </form>
    </div>
</body>

<!-- <?php 

    session_start();

    if(isset($_POST['submit'])){
        $user = $_POST['user'];
        $password =$_POST['pass'];
        $email = $_POST['email'];
        $file = file("auth.txt");
        // $hashPassword = password_hash($password, PASSWORD_DEFAULT);

        foreach($file as $value){
            list($user, $password) = explode("\t", $value);
        }

        if(trim($user)== $user && trim($password) == $password){
            $_SESSION["sname"] = $user;
            header("location:login.php");
    }else{
        $msg = "Create Your Account!";
    }
}


?> -->
<script>
    function togglePassword(){
        const pass = document.querySelector("#pass");
        const repass = document.querySelector("#repass");

        if (pass.type === "password"){
            pass.type = "text";
            repass.type ="text";
        }else{
            pass.type = "password";
            repass.type = "password";
        }
    }
</script>