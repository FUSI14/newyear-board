<?php
require 'conn.php';
//显示所有留言

$select_sql = "select * from message order by number desc";
$result = mysqli_query($conn, $select_sql);

while($row = mysqli_fetch_array($result)){
    echo "username:$row[1]<br>";
    echo "userID:$row[2]<br>";
    echo "number:$row[0]<br>";
    echo "message:$row[3]<br>";
    echo "like:$row[4]<br>";
}

mysqli_close($conn);
?>