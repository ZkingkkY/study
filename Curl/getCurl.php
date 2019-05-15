<?php
/**
 * Created by PhpStorm.
 * User: zky
 * Date: 2019/5/15
 * Time: 11:27
 */
$output =$this->get('http://www.xmtnews.com/events');
function get($url) {
    //初使化curl
    $ch = curl_init();
    //请求的url，由形参传入
    curl_setopt($ch, CURLOPT_URL, $url);
    //将得到的数据返回
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    //不处理头信息
    curl_setopt($ch, CURLOPT_HEADER, 0);
    //连接超过10秒超时
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    //执行curl
    $output = curl_exec($ch);
    //关闭资源
    curl_close($ch);
    //返回内容
    return $output;
}

print_r($output);