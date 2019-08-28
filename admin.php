
<?php
            require_once './database.php';
            $sql = "SELECT * FROM admin";
            $stmt = $pdo->prepare($sql);
            foreach ($pdo->pg_query($sql) as $row) {
?>
                <tr>
                    <td class="info"><?php echo $row['id']?></td> 
                    <td class="info"><?php echo $row['username']?></td> 
                    <td class="info"><?php echo $row['password']?></td> 
                    <td class="info"><?php echo $row['email']?></td> 
                   
<h1>WELCOME ADMIN- USER LIST</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>User name</th>
        <th>Password</th>
        <th>Email</th>
    </tr>
</table>
                   
