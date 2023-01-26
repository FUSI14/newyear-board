<?php
require 'conn.php';

$number = $_GET['number'];
$uid = $_GET['userID'];
$comment = $_POST['comment'];

$select_sql = "select * from users where userID='$uid'";
$result = mysqli_query($conn,$select_sql);
$name = mysqli_fetch_array($result);
$add_sql = "insert into comment (username,userID,comment,number) values ('$name[3]','$uid','$comment',$number)";
if(mysqli_query($conn,$add_sql))
{
    echo "评论成功";
}
else
{
    echo "评论失败";
}

mysqli_close($conn);
?>