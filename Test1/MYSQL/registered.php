<form action="mysql1.php" method="post">
           账号：<input type="text" name="id"><br />
           密码：<input type="password" name="password"><br />
    再次输入密码：<input type="password" name="password1"><br />
          姓名：<input type="text" name="name"><br />
          年龄：<input type="int" name="age"><br />
    <input type="submit" value="注册" />
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
echo '<td><a href="main.php"><button>返回</button></a></td>';
echo '</tr>';
echo '</table>';
