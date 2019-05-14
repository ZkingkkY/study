<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<body>
<?php
//开启session
session_start();

//获取传过来的商品名和价格
$name = $_GET['name'];
$price = $_GET['price'];
$goods = $_SESSION['goods'];

//把session中的商品信息和传过来的(刚买的)商品信息对比
if ($name == $goods[$name]['name']) {

    if($goods[$name]['number']==1) {
        //数量为1的话直接删除该商品
        unset($goods[$name]);
        $_SESSION['totalPrice'] -= $price;
    }
    else{
        //买过的话，则总价格减少，相应商品数量减少
        $_SESSION['totalPrice'] -= $price;
        $goods[$name]['number'] -= 1;
    }
}

$_SESSION['goods'] = $goods;
//购买处理完毕后跳转到商品列表
header('location: goodsList.php');
?>
</body>
</html>