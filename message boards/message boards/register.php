<?php
require 'conn.php';

$uid = $_POST['userID'];
$pwd = $_POST['password'];
$name = $_POST['username'];

//预处理
/*$stmt = $conn->prepare("insert into users (useID,password,username) values (?,?,?)");
$stmt->bind_param("sss",$uid,$pwd,$name);*/

$sql = "select count(*) from users where userID='{$uid}'";
$result = mysqli_query($conn,$sql);
$number = mysqli_fetch_array($result);
if($number[0]!=0)
{
    echo "已有该账号";
}
else
{
    $sql = "insert into users (userID,password,username) values ('{$uid}','{$pwd}','{$name}')";
    if (mysqli_query($conn, $sql)) {
        echo "注册成功";
    } else {
        echo "注册失败";
    }
    /*$stmt->execute();
    $stmt->get_result();*/
}

mysqli_close($conn);
?>