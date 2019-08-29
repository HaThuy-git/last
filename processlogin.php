<?php
 
session_start(); 
$user = $_GET['user'];
$password = $_GET['password'];
$email = $_GET['email'];

if((!$user) || (!$password) || (!$email)){
echo "Por favor, todos campos devem ser preenchidos! <br /><br />";
include "index.html";

}
else{

    $password = md5($password);
    $sql = pg_query(

        "SELECT * FROM account WHERE email_pessoa = '{$user}' AND senha_pessoa = '{$password}' AND status_pessoa='A' ";
    );
    $login_check = pg_num_rows($sql);
if($login_check > 0){

while($row = pg_fetch_array($sql)){
    foreach ($row as $key => $val){
     $$key = stripslashes( $val );
  }
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['email'] = $email;
           header("location: login.php");
        }
    }
else{
        echo "login successfull";

        include "index.html";
    }

}

?>
