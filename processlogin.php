<?php
    include 'connect.php';
    $sql = "SELECT * FROM account";
    $result = pg_query($connection,$sql);
    if (pg_num_rows($result) > 0) {
    else
    echo "<h1>Username or Password incorrect</h1>";
}
else
    echo "<h1>Your account has no system</h1>";
    
    // output data of each row
    while($row = pg_fetch_assoc($result)) {

include("index.php");

    ?>
    <div action="processlogin.php">
        <tr>
            <td>
                <span><?php echo $row["username"]?></span>
            </td>

            <td>
                <span><?php echo $row["email"]?></span>
            </td>

             <td>
                <span><?php echo $row["password"]?></span>
            </td>
            
        <tr/>

    </div>  
    <?php }} 
?>

 