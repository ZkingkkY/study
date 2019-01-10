<?php
$num1=$_POST['num1'];
if(is_null($num1)){
    echo '请输入年份判断是否是闰年';
}
else {
    if(!is_numeric($num1) ){
        echo '请输入数值类型';
    }
    if (($num1 % 4 == 0 && $num1 % 100 <> 0) || $num1 % 400 == 0) {
        echo $num1 . '年，是闰年';
    } else {
        echo $num1 . '年,不是闰年';
    }
}

?>