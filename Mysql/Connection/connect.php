<?php 
    $link =  mysqli_connect("localhost","root","","e_commerce" ); //mysqli_connet is updated version

if(!$link){
   die('Could not connect: ');
}
echo "<h2 style='color:green;text-align:center;font-size:16pt; '>Connected successfully</h2>";

?>

<body>
    <table border="1" style="border-collapse:collapse; width:50%; text-align: center; margin: 30px auto;">
        <tr>
            <td>ID</td>
            <td>UserName</td>
            <td>Password</td>
        </tr>
        <?php  
            $user = $link->query("select * from users");
             while(list($id, $username, $password) = $user ->fetch_row()){
                
                echo "<tr>
                        <td>$id</td>
                        <td>$username</td>
                        <td>$password</td>

                </tr>";
            }
        ?>
    </table>
</body>
