<?php
    include 'connect.php';
    $sql = "SELECT * FROM account";
    $result = pg_query($connection,$sql);
    if (pg_num_rows($result) > 0) {
    // output data of each row
    while($row = pg_fetch_assoc($result)) {

$sql = "select * from account where username ='" .$user 
. "' and password='" . $pass . "'";

$rows = pg_query($sql);

if(count($rows)>0)
include("index.html");
else
    echo "<h1>Username or Password incorrect</h1>";
}
else
    echo "<h1>Your account has no system</h1>";


?>

 