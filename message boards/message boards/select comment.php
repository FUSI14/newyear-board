<?php
require 'conn.php';

$number = $_GET['number']; //留言编号
$sql = "select * from comment where number = $number order by comment_number";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result)){
    echo "comment_number:$row[0]<br>";
    echo "username:$row[1]<br>";
    echo "userID:$row[2]<br>";
    echo "comment:$row[3]<br>";
}
mysqli_close($conn);
?>