<?php
include 'config.php';
session_start();
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME);
if (mysqli_errno($conn))
{    mysqli_error($conn);
    exit;}
mysqli_set_charset($conn, DB_CHARSET);

$sql="select * from shop ";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($res);

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<body>

<?php
//取出商品信息显示在页面上，并添加购买功能
foreach ($res as $value) {
    echo ' 商品名 ' . $value['name'] . ' 价格 ' . $value['price'];
    echo '<td width="100"><a href=buyadd.php?name="' .$value['name'].$value['price']. '">+1</a> </td>';
    echo '<td width="100"><a href=buycut.php?name="' .$value['name'].$value['price']. '">-1</a> </td>';
    echo '<br />';
}

//session_destroy($_SESSION['goods']);
$goods = $_SESSION['goods'];
echo '您买了:<br />';
foreach ($goods as $value) {
    echo $value['name'] . ' 价格 ' . $value['price'] . ' 数量 ' . $value['number'] . '<br />';
}
echo '总价：' . $_SESSION['totalPrice'] . '<br />';
?>
</body>
</html>