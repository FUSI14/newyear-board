<?php
require 'conn.php';

$uid = $_GET['userID'];

$sel_sql = "select * from collect where userID = '$uid' order by number desc";
$result = mysqli_query($conn,$sel_sql);

while($number = mysqli_fetch_array($result))
{
    $num_sql = "select * from message where number = $number[0]";
    $rlt = mysqli_query($conn,$num_sql);
    $row = mysqli_fetch_array($rlt);
    echo "username:$row[1]<br>";
    echo "userID:$row[2]<br>";
    echo "number:$row[0]<br>";
    echo "message:$row[3]<br>";
    echo "like:$row[4]<br>";
}

mysqli_close($conn);
?>