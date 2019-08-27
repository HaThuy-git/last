<?php 
require_once './connect.php';
  $sql = "SELECT adminusername, adminpassword FROM admin";
  $stmt = $GLOBALS['pdo']->prepare($sql);
  //Thiết lập kiểu dữ liệu trả về
  $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $stmt->execute();
  $resultSet = $stmt->fetchAll();
  if (isset($_POST['submit1'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    foreach ($resultSet as $row) {
      if ($username == $row['adminusername'] && $password ==  $row['adminpassword']){
        header("Location: Staff/view-staff.php?username={$username}");
      }else{
        echo '
          <script>
            alert("WRONG! Wanna try again?");
          </script>
        ';
      }
    }
  }
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
