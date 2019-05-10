<?php
include 'config.php';
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME);
if (mysqli_errno($conn))
{    mysqli_error($conn);
    exit;}
mysqli_set_charset($conn, DB_CHARSET);

session_start();
if(($_POST['username']!=null)||($_POST['password']!=null) )
{
    $username=$_POST['username'];
    $password=$_POST['password'];
}

$res = mysqli_query($conn,"select * from user where username =  '$username' ");
$row = mysqli_fetch_assoc($res);
if ($row['password'] == $password ) {

    //密码验证通过，设置session，把用户名和密码保存在服务端
  $_SESSION['username'] = $username;
  $_SESSION['password'] = $password;

    //最后跳转到登录后的欢迎页面 //注意：这里我们没有像cookie一样带参数过去
   header('Location: goodsList.php');
}
?>


<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<from action="" method="post">
    <div>
        用户名：<input type="text" name="username"/>
        密码：<input type="text" name="password"/>
        <input type="submit" name="登录">
    </div>

</from>
</body>

</html>