<?php
/**
 * Created by PhpStorm.
 * User: zky
 * Date: 2019/4/12
 * Time: 9:12
 */
include 'config.php';
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME);
if (mysqli_errno($conn))
{    mysqli_error($conn);
    exit;
}
mysqli_set_charset($conn, DB_CHARSET);


$userid=trim($_POST['id']);
$password=trim($_POST['password']);


$sql = "select * from student where id='$userid'";
$result=mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if ($result && mysqli_num_rows($result)) {

    if ($row['ID'] == $userid && $row['password'] == $password) {
        echo '登录成功' . '<br/>';
        echo "欢迎！" . $row['ID'] . " 使用测试系统！" . "<br/>";
    } else if ($row['ID'] == $userid && $row['password'] != $password) {
        echo '登录失败，密码错误！' . '<br/>';
    } else {
        echo '系统异常！' . '<br/>';
    }
}
else {
    echo '登录失败，账号不存在！' . '<br/>';
}

mysqli_close($conn);

