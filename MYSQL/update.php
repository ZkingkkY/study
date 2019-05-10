<?php
include 'config.php';
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME);
if (mysqli_errno($conn))
{    mysqli_error($conn);
    exit;}
mysqli_set_charset($conn, DB_CHARSET);


$id = (int) $_POST['id'];
if (trim($_POST['password'])) {

    $password = trim($_POST['password']);

    $sql = "update student set password='" . $password . "' where id = $id";
    $result1 = mysqli_query($conn, $sql);
}
if (trim($_POST['name'])) {

    $name = trim($_POST['name']);

    $sql = "update student set name='" . $name . "' where id = $id";
    $result2 = mysqli_query($conn, $sql);
}

if (trim($_POST['age'])) {

    $age = trim($_POST['age']);

    $sql = "update student set age='" . $age . "' where id = $id";
    $result3 = mysqli_query($conn, $sql);
}


if ($result1) {
    echo '密码修改成功'.'<br/>';
}else{
    echo '密码修改失败'.'<br/>';
}

if ($result2) {
    echo '姓名修改成功'.'<br/>';
}else{
    echo '姓名修改失败'.'<br/>';
}

if ($result3) {
    echo '年龄修改成功'.'<br/>';
}else{
    echo '年龄修改失败'.'<br/>';
}

echo '<td><a href="main.php"><button>返回</button></a> </td>';