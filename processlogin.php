<?php
    include 'connect.php';
    $sql = "SELECT * FROM account";
    $result = pg_query($connection,$sql);
    if (pg_num_rows($result) > 0) {
    // output data of each row
    while($row = pg_fetch_assoc($result)) {

 if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    foreach ($resultSet as $row) {
      if ($username == $row['accountusername'] && $password ==  $row['accountpassword'] && $email == $row['accountemail'])
      {
        header("Location: login.php?username={$username}");
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


?>

 