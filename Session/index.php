
<style>
    div{
        display:flex;
        align-items:center;
        justify-content:center;
    }
    legend{
        padding:10px;
        text-align:center;
        font-weight:bold;
        letter-spacing:2px;
        font-family:Cursive;
        margin-bottom:10px;
        
    }
    form{
        padding:10px;
        border:2px solid #8C35A5;
        width:25%;
         align-items:center;
         display:flex;
         flex-direction:column;
         border-radius:20px;
         
    }
    input{
        padding:10px;
        width: 70%;
        
       
       
    }
    button{
        width:30%;
        padding:10px;
        border:none;
        background-color:#97C05C;
        font-weight:bold;
        letter-spacing:2px;
    }
    button:hover{
        background-color:#8C35A5;
        color:white;
        border-radius:10px;
        cursor:pointer;
    }
    p{
        font-weight:bold;
        font-size:17px;
    }
</style>
<div>
<form action="" method="post">
    <img src="donatello.png" alt="" width="100px">
    <legend>Sign Me Up!</legend>
    <input type="text" Placeholder="Your Full Name" name="name">
    <br>
    <br>
    <input type="text" placeholder="Write your username here!" name="username">
    <br>
    <br>
    <input type="email" Placeholder="Your Email" name="email">
    <br>
    <br>
    <input type="password" Placeholder="Your Password" name="password">
    <br>
   <p>Access more. Just one step away!</p>
   <br>
   
    <button name="submit">SUBMIT</button>
</form>
</div

<?php 
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];


        $file=file("auth.txt");
	  
	    foreach($file as $line){
		  
		  list($_name, $_username, $_email, $_password)=explode(",",$line);
		  
		  if(trim($_username)==$username && trim($_password)==$password){
			  
			 $_SESSION["sname"]=$username;
			
			 header("location:demo.php");
			  
		  }else{
			  
			  $msg="Username or Password is incorrect!";
		  }
		  
	  }
    }
?>