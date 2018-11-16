<?php

/*
echo '<table width="800" border="1" align="center">';
for($a=1;$a<10;$a++){
    echo '<tr>';
    for ($b=1;$b<=$a;$b++){


        if ($a%4==0){
            goto end;    //跳到指定的地方
        }

    if (($a%2==0 && $b%2==1)|| ($a%2==1 && $b%2==0) ){
        echo '<td bgcolor="#7fffd4">'. $a.'*'.$b.'='.$a*$b.'   ' .'</td>';
    }   else{
                echo '<td >'. $a.'*'.$b.'='.$a*$b.'   ' .'</td>';
            }
    }
    echo '</br>';
    echo '</tr>';
}
end:
echo '<h1 align="center">'.'我不想循环了'.'</h1>';
echo '</table>';*/

/*
echo '<table width="800" align="center" border="1">';

for ($i=0;$i<10;$i++){

if ($i%2==0){
    echo '<tr bgcolor="aqua">';
}
else{
    echo '<tr>';
}

    $a=mathA();
    $b=mathB(10);
    echo '<td>'.$a.'</td>'.'<br>';
    echo '<td>'.$b.'</td>'.'<br>';

    echo '</tr>';
}

function mathA($a='10'){
    return $a;
}

function mathB($a){
    return $a;
}
echo '</table>';
*/

/*
$n = 2;
dg($n);
function dg( $n ){

    echo $n.'<br />';

    $n = $n - 1;

    if($n > 0){
        //在函数体内调用了dg自己哟
        dg($n);
    }else{
        echo '--------------';
    }

    echo '俺是狗蛋，俺还没执行' . $n . '<br />';
}
*/

/*
if(copy('D:\a.txt','D:\b.txt')){//绝对路径
    echo '复制成功';
}else{
    echo '复制失败';
}
*/

/*
//include_once 'version.php';
//include'version.php';
require 'version.php';
require_once 'version.php';
Demo();
Test();
*/


/*
//定义一下时区常量，以后你可以放到配置文件里
define('TIME_ZONE','Asia/shanghai');

//执行函数
date_default_timezone_set(TIME_ZONE);
echo date('Y-m-d H:i:s').'<br>'."\n";

$mytime = getdate();
echo "年 :".$mytime['year']."\n";
echo "月 :".$mytime['mon']."\n";
echo "日 :".$mytime['mday']."\n";
echo "时 :".$mytime['hours']."\n";
echo "分 :".$mytime['minutes']."\n";
echo "秒 :".$mytime['seconds']."\n";
echo "一个小时中的第几钟 :".$mytime['minutes']."\n";
echo "这是一分钟的第几秒 :".$mytime['seconds']."\n";
echo "星期名称 :".$mytime['weekday']."\n";
echo "月份名称 :".$mytime['month']."\n";
echo "时间戳   :".$mytime[0]."\n";

//检测时间函数
var_dump(checkdate(12, 31, 2018));
var_dump(checkdate(2, 29, 2011));

echo date("m-d-Y h:m:s")."\n";
echo date("m-d-Y h:m:s",mktime(10,15,35,date("m"),date("d"),date("Y")))."\n";
echo date("m-d-Y h:m:s",mktime(10,15,35,date("m"),date("d")-30,date("Y")))."\n";
*/

/*
$area = array(

    'china' => array(

        '上海',
        '湖北',
        '天津',
        '北京' => array(
            'hd' => '海淀',
            '朝阳',
            '房山',
            'cp' => '昌平',
        ),

        '广东' => array(
            '深圳',
            '广州',
            '佛山',
            'dg' => '东莞',

        ),

    ),


    'usa' => array(

        '华盛顿',
        '旧金山',
        '纽约' => array(
            '曼哈顿区',
            '皇后区',
            '布鲁克林区',
        ),

    ),
);


//读取华盛顿
echo $area['usa']['0'];

//读取：布鲁克林
echo $area['usa']['纽约'][2];


//读取：昌平
echo $area['china']['北京']['cp'];

//修改cp下标的值改为：西城区

$area['china']['北京']['cp'] = '西城区';

//输出看看原来昌平的值是否发生了变化
echo $area['china']['北京']['cp'];
*/

$arr=array(
    '教学部'=>array(
        array('李某','18','人妖'),
        array('高某','20','男'),
        array('张某','21','妖人'),
    ),
    '宣传部'=>array(
        array('李某','18','人妖'),
        array('高某','20','男'),
        array('张某','21','妖人'),
    ),
    '财务部'=>array(
        array('李某','18','人妖'),
        array('高某','20','男'),
        array('张某','21','妖人'),
    ),
);


foreach ($arr as $value){


    foreach ('财务部' as $k => $v){
        echo $k.'-----------------'.$v;
    }
}
?>



