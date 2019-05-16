<?php

$content = post('http://www.baidu.com','数据传输');
//post传输数据，以后在调用微信公众平台或者其他第三方API系统。它们需要使用POST方法要求你发送数据的时候使用

echo print_r($content).'</br>';
echo var_dump($content);
function post($url, $data) {

    //初使化init方法
    $ch = curl_init();

    //指定URL
    curl_setopt($ch, CURLOPT_URL, $url);

    //设定请求后返回结果
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    //声明使用POST方式来进行发送
    curl_setopt($ch, CURLOPT_POST, 1);

    //发送什么数据呢
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);


    //忽略证书
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

    //忽略header头信息
    curl_setopt($ch, CURLOPT_HEADER, 0);

    //设置超时时间
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);

    //发送请求
    $output = curl_exec($ch);

    //关闭curl
    curl_close($ch);

    //返回数据
    return $output;
}