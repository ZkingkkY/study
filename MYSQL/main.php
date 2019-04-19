<html>
<head>
    <meta charset="UTF-8">
    <title>用户管理系统</title>
</head>
</html>

<form action="login.php" method="post">
    账号：<input type="text" name="id"><br />
    密码：<input type="password" name="password"><br />
    <input type="submit" value="登陆" />
</form>
<?php
/**
 * Created by PhpStorm.
 * User: zky
 * Date: 2019/4/17
 * Time: 9:57
 */
echo '<table width="200" border="0.5">';
echo '<tr>';
echo '<td><a href="registered.php"><button>用户注册</button></a></td>';
echo '<td><a href="manage.php"><button>用户管理</button></a></td>';
echo '</tr>';
echo '</table>';