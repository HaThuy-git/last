<?php
    include 'connect.php';
    $sql = "SELECT * FROM admin";
    $result = pg_query($connection,$sql);
    if (pg_num_rows($result) > 0) {
    // output data of each row
    while($row = pg_fetch_assoc($result)) {
    
    ?>
    <div action="Adminlist.php">
        <tr>
            
            <td>
                <span><?php echo $row["id"]?></span>
            </td>

            <td>
                <span><?php echo $row["username"]?></span>
            </td>

            <td>
                <span><?php echo $row["password"]?></span>
            </td>

             <td>
                <span><?php echo $row["email"]?></span>
            </td>
            <td>
                <a href="https://babyhop.herokuapp.com/add_user.php">Add</a> | <a href="">Delete</a>
            </td>
            
        <tr/>
    </div>  
    <?php }} 
?>

