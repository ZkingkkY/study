
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


if(copy('D:\a.txt','D:\b.txt')){
    echo '复制成功';
}else{
    echo '复制失败';
}
?>

