<?php 

require_once './connect.php';  
if(isset($_POST["username"]) && isset($_POST["password"]))
{
    $user = $_POST["username"];
    $pass = $_POST["password"];
    $sql = "SELECT * FROM account WHERE username = '$user' AND password= '$pass'";
  
    $result = pg_query($connection,$sql);
    if(pg_num_rows($result)==1) 
    { ?>
        <script>
            alert("Congratulations Login Successfully!!");
            window.location.href = "/index.php";
        </script>
    <?php
    } 
    else 
    { 

    ?>
        <script>
            alert(" Username Or Password Is Wrong");
        </script>
        <?php }
}
?>



