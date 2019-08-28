<?php
$u = $_POST['username'];
$p = md5($_POST['password']); 
$email = $_POST['email'];
$sql = "SELECT * FROM admin";
$result = pg_query("insert into admin(username, password, email) value ('$u', '$p', 'email') ") or die ("Lỗi truy vấn ") ;
if($result) {
	header("https://babyhop.herokuapp.com/processadd.php");
}

?>

