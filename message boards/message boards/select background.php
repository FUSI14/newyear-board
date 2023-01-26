<?php
require 'conn.php';

$number = $_GET['number'];

$sql = "select background from message where number = $number";
$result = mysqli_query($conn,$sql);
$background = mysqli_fetch_array($result);
echo "$background[0]";

mysqli_close($conn);
?>