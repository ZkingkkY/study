<?php
/**
 * Created by PhpStorm.
 * User: zky
 * Date: 2019/4/12
 * Time: 9:12
 */

$host='127.0.0.1';
$user='root';
$password='root';
$dbName='text';

$link=new mysqli($host,$user,$password,$dbName);
if ($link->connect_error){
    die("连接失败：".$link->connect_error);
}


//链接数据库
$conn = mysqli_connect($host,$user,$password,$dbName );

//mysqli_select_db($conn,'text');

//设置在数据库间传输字符时所用的默认字符编码
mysqli_set_charset($conn,'utf8');
$sql = "insert into user(user_id,username,age) values('1004','张三','15')";


$sql1 = "select user_id,username,age from user";
//执行一次查询 返回为 0 1
$result = mysqli_query($conn, $sql);
if ($result) {
    echo '成功'.'<br/>';
} else {
    echo '失败'.'<br/>';
}
echo '插入' . mysqli_insert_id($conn);

mysqli_close($conn);

//phpinfo();
