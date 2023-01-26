<?php
require 'conn.php';
//修改用户信息
$userID = $_GET['userID'];
$name = $_POST['username'];
$update_sql = "update users set username = '$name' where userID = '$userID'";

if (mysqli_query($conn, $update_sql))
{
    echo "修改成功";
}
else
{
    echo "修改失败";
}

mysqli_close($conn);
?>