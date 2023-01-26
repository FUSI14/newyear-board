<?php
require 'conn.php';

$judge = $_GET['judge']; //不确定是post还是get，若为0，则增加，若为1，则减少
$number = $_GET['number'];
$uid = $_GET['userID'];

if($judge==0)
{
    $sql = "insert into collect (number,userID) values ($number,'$uid')";
    if(mysqli_query($conn,$sql))
    {
        echo "收藏成功";
    }
    else
    {
        echo "收藏失败";
    }
}
else
{
    $sql = "delete from collect where number = $number and userID = '$uid'";
    if(mysqli_query($conn,$sql))
    {
        echo "取消收藏成功";
    }
    else
    {
        echo "取消收藏失败";
    }
}
mysqli_close($conn);
?>