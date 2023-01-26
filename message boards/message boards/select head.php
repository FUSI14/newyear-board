<?php
require 'conn.php';

$uid = $_GET['userID'];

$sql = "select head from users where userID = '$uid'";
$result = mysqli_query($conn,$sql);
$head = mysqli_fetch_array($result);

echo $head[0];
mysqli_close($conn);
?>