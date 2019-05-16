<?php

$content = get('http://www.xmtnews.com/events');
//打印获得的数据
//echo print_r($content);

preg_match('/<section class="ov">(.*?)<div class="hr-10"><\/div>/mis', $content, $match);
//将正则匹配到的内容赋值给$area
$area = $match[1];
preg_match_all('/<h3><a href="(.*?)" title=".*?" class="headers" target="_blank">(.*?)<\/a><\/h3>/', $area, $find);
var_dump($find);
//get方法获取网页

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