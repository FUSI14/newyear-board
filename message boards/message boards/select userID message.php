<?php
require 'conn.php';
//个人页面已发布留言
$uid = $_GET['userID'];

$select_sql = "select * from message where userID = '$uid' order by number desc";
$result = mysqli_query($conn,$select_sql);
while($row = mysqli_fetch_array($result)){
    echo "username:$row[1]<br>";
    echo "userID:$row[2]<br>";
    echo "number:$row[0]<br>";
    echo "message:$row[3]<br>";
    echo "like:$row[4]<br>";
}

mysqli_close($conn);
?>