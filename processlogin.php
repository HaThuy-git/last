<!DOCTYPE html>
<html>
<head>
<title>Get Data</title>

</head>
<body>
<?php
require_once './connect.php';

 // Lấy dự liệu gửi lên từ client dùng biến toàn cục $_GET hoặc $_POST
 // Isset: kiểm tra xem tài khoản có tồn tại không 
        if(isset($_POST['user']) && isset($_POST['pass']))
{
        $user = $_POST['user'];
        $pass = $_POST['pass'];
    // tạo kết nối tới cơ sở dữ liệu bằng mysql
        
  
// tạo câu truy vấn 
$sql = "select * from account where username ='" .$user 
. "' and password='" . $pass . "'";

$rows = pg_query($sql);

if(count($rows)>0)
header("Location: ./index.php");
else
    echo "<h1>Username or Password incorrect</h1>";
}
else
    echo "<h1>Your account has no system</h1>";

?>

</table>
</body>
</html>