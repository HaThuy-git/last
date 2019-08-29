<?php
    include 'connect.php';
    $sql = "SELECT * FROM account";
    $result = pg_query($connection,$sql);
    if (pg_num_rows($result) > 0) {
    // output data of each row
    while($row = pg_fetch_assoc($result)) {
?>

 