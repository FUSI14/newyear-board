<?php
require 'conn.php';

$uid = $_GET['userID'];
$head = $_POST['head'];

$sql = "update users set head = '$head' where userID = '$uid'";

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