<?php
         include 'connect.php';
    $sql = "SELECT * FROM admin";
    $result = pg_query($connection,$sql);
    if (pg_num_rows($result) > 0) {
    // output data of each row
    while($row = pg_fetch_assoc($result)) {
    
    ?>
                <tr>
                    <td class="info"><?php echo $row['id']?></td> 
                    <td class="info"><?php echo $row['username']?></td> 
                    <td class="info"><?php echo $row['password']?></td> 
                    <td class="info"><?php echo $row['email']?></td> 
                   
                </tr>
            <?php}}
            ?>