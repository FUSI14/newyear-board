<?php
require 'conn.php';

$number = $_GET['number'];
$message = $_POST['message'];

$update_sql = "update message set message = '$message' where number = $number";

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