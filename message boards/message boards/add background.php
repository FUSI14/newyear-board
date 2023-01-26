<?php
require 'conn.php';

$number = $_GET['number'];
$background = $_POST['background'];

$sql = "update message set background = '$background' where number = $number";

if(mysqli_query($conn,$sql))
{
    echo "选择成功";
}
else
{
    echo "选择失败";
}

mysqli_close($conn);
?>