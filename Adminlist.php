
    <div action="Adminlist.php">
        <?php
            require_once './dbname.php';
            $sql = "SELECT * FROM admin"; 
        $stmt = $pdo->prepare($sql); 
        $stmt->setFetchMode(PDO::FETCH_ASSOC); 
        $stmt->execute();
        $resultSet = $stmt->fetchAll();
            foreach ($resultSet as $row) {
            ?>
        <tr>
            
            <td>
                <span><?php echo $row["id"]?></span>
            </td>

            <td>
                <span><?php echo $row["username"]?></span>
            </td>

            <td>
                <span> <?php echo $row["password"]?></span>
            </td>

             <td>
                <span><?php echo $row["email"]?></span>
            </td>
            
        <tr/>
    </div>  
    <?php }} 
?>