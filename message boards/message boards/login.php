<?php
require 'conn.php';

$uid = $_POST['userID'];
$pwd = $_POST['password'];
$sql = "select count(*) from users where userID='$uid' and password='$pwd'";  //账号不能出现一样的
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
if($row[0]!=0)
{
    echo "登录成功";
}
else
{
    echo "登录失败";
}
mysqli_close($conn);
?>