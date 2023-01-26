<?php
require 'conn.php';

$uid = $_GET['userID'];  //应改为GET
$message = $_POST['message'];

$name_sql = "select username from users where userID = '$uid'";
$result = mysqli_query($conn,$name_sql);
$name = mysqli_fetch_array($result);

$add_sql = "insert into message (username,userID,message) values ('$name[0]','$uid','$message')";
if (mysqli_query($conn, $add_sql))
{
    echo "留言成功";
}
else
{
    echo "留言失败";
}

mysqli_close($conn);
?>


