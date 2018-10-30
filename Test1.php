<?php



//尝试将include 'version.php'这一行代码注释后再执行看看，对比结果
include 'version.php';

if(!defined('AUTH')){
    echo '非法！非法！你尝试跳过授权文件';
    exit;
}


//模拟后面用户注册和用户登陆的代码xxx行
echo '用户注册';
?>