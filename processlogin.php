<?php 
require_once './connect.php';  
if(isset($_POST["username"]) && isset($_POST["password"]))
{
    $user = $_POST["username"];
    $pass = $_POST["password"];
    $sql = "SELECT * FROM account WHERE username = '$username' AND pwd= '$password'";
    $rows = pg_query($sql);
    if(pg_num_rows($rows)==1) 
    { ?>
        <script>
            alert("Congratulations Login Successfully!!");
        </script>
    <?php
    } 
    else 
    { 
         window.location.href = "/index.php";
    ?>
        <script>
            alert(" Username Or Password Is Wrong");
            window.location.href = "/index.php";
        </script>
        <?php }
}
?>

