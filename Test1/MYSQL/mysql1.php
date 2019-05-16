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
$password1=trim($_POST['password1']);
$username=trim($_POST['name']);
$age=trim($_POST['age']);

//判断密码是否一致
if($password!=$password1){
    echo('两次密码不一致，请返回上一页！'.'<br/>');
    echo '<td><a href="registered.php"<a/><button >返回</button></td>';
}
else if(empty($userid)){
    echo('账户不能为空,请返回上一页!'.'<br/>');
    echo '<td><a href="registered.php"<a/><button >返回</button></td>';

}
else if(strlen($userid)<4){
    echo('账号长度至少4位数，请返回上一页！'.'<br/>');
    echo '<td><a href="registered.php"<a/><button >返回</button></td>';

}
else {
//判断账号是否存在
    $sql = "select * from student where id='$userid'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows) {
        echo '注册失败！账号：' . $userid . '已经存在' . '<br/>';
        while ($row = $result->fetch_array()) {
            echo "账号:" . $row[0] . " 姓名:" . $row[2] . " 年龄:" . $row[3] . "<br/>";
        }
    } //开始注册
    else {
        $sql1 = "insert into student(id,password,name,age) values('$userid','$password','$username','$age')";
        mysqli_query($conn, $sql1);
        echo '注册成功！您的账号是： ' . $userid . '<br/>';
    }
    mysqli_close($conn);

    echo '<td><a href="registered.php"<a/><button >返回</button></td>';
}