<?php 

require_once './connect.php';  
if(isset($_POST["username"]) && isset($_POST["password"]))
{
    $user = $_POST["username"];
    $pass = $_POST["password"];
    $sql = "SELECT * FROM account WHERE username = '$user' AND password= '$pass'";
  
    $result = pg_query($connection,$sql);
    if(pg_num_rows($result)==1) 
    { 
        header("Location: ./index.php");
    } 
else echo "log in fail";
?>



