<?php
            require_once 'connect.php';
            $sql = "SELECT * FROM admin";
            $stmt = $pdo->prepare($sql);
            foreach ($pdo->pg_query($connection,$sql) as $row) {
?>
                <tr>
                    <td class="info"><?php echo $row['id']?></td> 
                    <td class="info"><?php echo $row['username']?></td> 
                    <td class="info"><?php echo $row['password']?></td> 
                    <td class="info"><?php echo $row['email']?></td> 
                   
                </tr>
            <?php}}
            ?>