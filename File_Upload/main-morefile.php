<html>
<head>
    <meta charset="utf-8" />
    <title>多文件上传</title>
</head>
<body>
<form action="morefile.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file[]">
    <input type="file" name="file[]">
    <input type="submit" value="上传">
</form>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: zky
 * Date: 2019/1/30
 * Time: 16:54
 */
