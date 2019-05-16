<?php
/**
 * Created by PhpStorm.
 * User: zky
 * Date: 2019/3/8
 * Time: 15:34
 */

/*
这个值的状态为on 或者 off，也可以设值为1 或者0。
display_error的值设为0或者off则不在页面中显示错误，如果设为1或者on则显示错误信息
*/
echo '服务器中display_errors的状态为' . ini_get('display_errors');

//关闭了所有的错误显示
//error_reporting(0);
//@为单行错误抑止符（不提示）效果等同于 error_reporting(0);error_reporting(E_ALL & ~ E_NOTICE);
$fp = fopen('adsaf.txt','r');

//显示所有错误
//error_reporting(E_ALL);

//显示所有错误，但不显示提示
//error_reporting(E_ALL & ~ E_NOTICE);


//无法连接到数据库服务器，直接记录到php.ini 中的error_log指定位置
error_log("无法连接到数据库服务器服务器");

//可以发送邮件，但是php.ini必须配置过邮件系统
error_log('可以用邮件报告错误，让运维人员半夜起床干活',1 ,'277382302@qq.com');

//记录在指定的位置
error_log("我是一个错误哟", 3, "d:/a.log");


?>