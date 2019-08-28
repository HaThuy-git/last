<?php
            require_once './database.php';
            $sql = "SELECT * FROM admin";
            $stmt = $pdo->prepare($sql);
            foreach ($pdo->query($sql) as $row) {
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
                   
