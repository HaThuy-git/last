<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Add usert</title>
</head>
<body>
	<?php 
require 'connect.php'; 

<h1>ADD USER </h1>
<form action="processadd.php" method="post">
	User name: <input type="text" name="user"> <br> <br>
	Password: <input type="text" name="email"> <br> <br>
	Email: <input type="password" name="pass"><br> <br>
	<input type="Submit" value="Add User">
</form>
?>
</body>
</html>
