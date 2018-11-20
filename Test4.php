<?php

$data = array(

    0 => array(
        '中国' => 'china',
        '美国' => 'usa',
        '德国' => ' Germany',
    ),

    1 => array(
        '湖北' => 'hubei',
        '河北' => 'hebei',
        '山东' => 'shandong',
        '山西' => 'sanxi',
    ),

);

//注：我们在使用foreach循环时，第一次循环将键为0和键为1的两个数组赋值给一个变量($value)。然后，再套一个循环遍历这个$value变量，$value中的值取出来，赋值给$k和$v。

foreach($data as $value){

    foreach($value as $k => $v){
        echo $k . '-----' . $v .'<br />';
    }

    echo '----------分割线-----------<br />';

}

?>