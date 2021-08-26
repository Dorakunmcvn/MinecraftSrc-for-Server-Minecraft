<?php
// File test
require("../Iz_Shower/settings.php");
if (isset($_POST['admin_username'])) {
$admin_username = $_POST['admin_username'];
$admin_password = $_POST['admin_password'];

echo "<script> alert('Sai tài khoản'); </script>";
header("Location: ./index.html");
if ($admin_username == $admin_user and $admin_password == $admin_pass) {
    echo "<script> alert('Đăng nhập thành công !'); </script>";
    header("Location: ./duyet-the.html");
    
}
}
// if (!isset($_POST['admin_username']) and !isset($_POST['admin_password'])) {
// echo "<script> alert('Vui lòng nhập đầy đủ thông tin'); </script>
// eta http-equiv='expires' content='0' />
// 	<META HTTP-EQUIV='refresh' CONTENT='0;URL=./index.html";
// }

?>