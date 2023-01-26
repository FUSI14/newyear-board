<?php
require 'conn.php';

$uid = $_GET['userID'];
$number = $_GET['number'];
$sql = "select count(*) from collect where userID = '$uid' and number = $number";
$result = mysqli_query($conn,$sql);
$count = mysqli_fetch_array($result);
if($count[0]==0)
{
    echo "0";  //没有收藏这条留言，输出0，显示空星形
}
else
{
    echo "1";
}
mysqli_close($conn);
?>