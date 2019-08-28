<?php require_once './connect.php';?>
<?php
$connection = pg_connect("host=ec2-23-23-182-18.compute-1.amazonaws.com port=5432 
    dbname=d4bvd2cc5jlt96 user=iloapxkhzeuvec 
    password=5f71779c31e9a25d696cfe511c87151a96a3bd72a3c35f79e559e8e10c4366f2");  
 if(!$connection) {
     die("Database connection failed");
 }
 ?>