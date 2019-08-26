<?php 
require_once './connect.php';
$servername = "localhost";
$username = "username";
$password = "password";

$qr = mysql_select_db("select * from admin") or die ("Error");

?>
<h1>WELCOME ADMIN- USER LIST</h1>
<table border="1">
	<tr>
		<th>ID</th>
		<th>User name</th>
		<th>Password</th>
		<th>Email</th>
	</tr>
</table>
<?php 
$i =1;
while ($rs = mysql_fetch_array($qr)) {
	echo "<tr>";
	echo "<td>".$i."</td>";
	echo "<td>".$rs["username"]."</td>";
	echo "<td>***************</td>";
	echo "<td>".$rs["email"]."</td>";
	echo "</tr>";
}
}
?>