<?php
require 'conn.php';

$number = $_GET['number'];
$del_sql = "delete from message where number = $number";

if (mysqli_query($conn, $del_sql))
{
    echo "删除成功";
}
else
{
    echo "删除失败";
}

mysqli_close($conn);
?>