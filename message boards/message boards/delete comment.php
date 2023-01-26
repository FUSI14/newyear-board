<?php
require 'conn.php';

$cid = $_GET['comment_number'];

$del_sql = "delete from comment where comment_number = $cid";
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