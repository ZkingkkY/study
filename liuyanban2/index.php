<?php
    include 'config.php';

?>
<form action="edit.php" method="get">
   <table align="left">
       <tr>
          <td> 服务器地址</td> <td><input type="text" name="DB_HOST" value="<?php echo DB_HOST;?>" /></td>
       </tr>
       <tr>
           <td> 用户名</td> <td><input type="text" name="DB_USER" value="<?php echo DB_USER;?>" /></td>
       </tr>
       <tr>
           <td> 密码</td> <td><input type="text" name="DB_PWD" value="<?php echo DB_PWD;?>" /></td>
       </tr>
       <tr>
           <td> 数据库</td> <td><input type="text" name="DB_NAME" value="<?php echo DB_HOST;?>" /></td>
       </tr>
       <tr>
           <td><input type="submit" value="修改" /></td>
       </tr>
   </table>

</form>