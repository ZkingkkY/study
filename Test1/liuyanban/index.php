<h1>基于文件的留言本演示</h1>
<form action="write.php" method="get" >
    用户名：  <input type="text" name="username" /><br />
    留言内容：<textarea  name="content"></textarea><br />
    <input  type="submit" value="提交"  />
</form>
<body bgcolor="#e6e6fa">
<?Php
//设置时区
date_default_timezone_set('PRC');
//读了内容
$string = file_get_contents('message.txt');
//如果$string 不为空的时候执行，也就是message.txt中有留言数据
if (!empty($string)) {
    //每一段留言有一个分格符，但是最后多出了一个&^。因此，我们要将&^删掉
    $string = rtrim($string, '<br/>');
    //以&^切成数组
    $arr = explode('<br/>', $string);
    //将留言内容读取
    foreach ($arr as $value) {
        //将用户名和内容分开
        list($username, $content, $time) = explode('$#', $value);
        echo '用户名：<font size="2" color="red">'  . $username .  '</font><br/>';
        echo '留言：<font size="2" >'.$content.'</font><br/>';
        echo '<font size="1" color="#778899">时间: '.date('Y-m-d H:i:s', $time).'</font><br/>';
        echo '<hr />';
    }
}
?>
</body>
