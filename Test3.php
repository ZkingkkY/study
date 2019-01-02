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

/*
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
*/

/*
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
foreach($arr as $value) {//将二维数组的值给 value

    foreach ($value as $value1) {//再将三维数组的值给 value1

        foreach ($value1 as $k => $v) {
            echo $k . '-----' . $v . '<br />';
        }
        echo '----------------------------'.'<br>';
    }
}

*/


/*
//定义一个变量叫$kongjie(空姐)
$kongjie=[
    'gao'=>'穿黑衣服的',
    'shou'=>'退特别长特别细',
    'mei'=>'好白',
];

//第一次each
$data = each($kongjie);

echo '<pre>';
var_dump($data);
echo '</pre>';

echo '-----华丽丽分割线------<br />';


//第2次each
$data = each($kongjie);

echo '<pre>';
var_dump($data);
echo '</pre>';

echo '-----华丽丽分割线------<br />';

//第3次each【执行到了最后一个元素了】
$data = each($kongjie);

echo '<pre>';
var_dump($data);
echo '</pre>';

echo '-----华丽丽分割线------<br />';

//第4次【此时，后面已没有可操作的元素了，看返回什么】
$data = each($kongjie);

echo '<pre>';
var_dump($data);
echo '</pre>';

echo '-----华丽丽分割线------<br />';
*/

/*
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

foreach ($arr as $key => $value){
    echo  '<h1 align="center">'.$key.'</h1>>'.'<br>';
    echo '<table width="800" border="1" align="center">';
    foreach ($value as $value1 ){
        echo '<tr>';
        foreach ($value1 as $key=>$value2) {
            echo '<td>' . $value2 . '</td>'.'<br>';
        }
        echo '</tr>';

    }
    echo '</table>';
}


while(list($key,$value)=each($arr)){
    echo  '<h1 align="center">'.$key.'</h1>>'.'<br>';
 echo '<table width="800" border="1" align="center">';

 while(list($key1,$value1)=each($value)){
     echo '<tr>';
     while(list($key2,$value2)=each($value1)){
         echo '<td>' . $value2 . '</td>'.'<br>';
     }
     echo '</tr>';
 }
echo '</table>';
}
*/

/*
$mingren = array("邓超", "黄晓明");
$mingren1 = array("邓超", "黄晓明");
$mingren2 = array("邓超", "黄晓明", "宁泽涛", "钟汉良");
$mingren3 = array("邓超", "黄晓明", "宁泽涛", "钟汉良");
$dc = array_unshift($mingren , "宁泽涛", "钟汉良");
$dc1 = array_push($mingren1 , "宁泽涛", "钟汉良");
$dc2 = array_shift($mingren2);
$dc3 = array_pop($mingren3);
echo $dc .'<br />';
echo $dc1 .'<br />';
echo $dc2 .'<br />';
echo $dc3 .'<br />';

print_r($mingren);
echo '<br>';
print_r($mingren1);
echo '<br>';
print_r($mingren2);
echo '<br>';
print_r($mingren3);

*/




/*
$t=array(
    '我们',
    'yy'=>'永远',
    'dbg'=>'需要不断奋进',
    'djn'=>'才能开创未来'
);


//读取数组的值
echo current($t).'<br />';
//读取数组的键
echo key($t).'<br />';

//向后移动一下
next($t);

//再读值和键
echo current($t).'<br />';

echo key($t).'<br />';


//向后移动一下
next($t);
echo current($t).'<br />';

echo key($t).'<br />';


//向前移动一下
prev($t);
echo current($t).'<br />';
echo key($t).'<br />';


//移到末尾
end($t);
echo current($t).'<br />';
echo key($t).'<br />';

//移至开始处
reset($t);
echo current($t).'<br />';

echo key($t).'<br />';

//销毁数组
unset($t);
//var_dump($t);

*/

//正则表达式
/*
\d 匹配0-9
\D 匹配除了0-9以外的字符
\w 匹配a-z A-Z 0-9 _ 字符
\W 除了 a-z A-Z 0-9 字符
\s 匹配\n \r \t 空格字符
\S 非空字符
[] 指定字符
. 除了\n以外的所有字符

//元字符
*     出现0或更多次数
+     出现1或更多次数
？    出现0或者1次数
{m,n} 出现m到n之间次数
{m}   出现m次数
{m,}  出现m次数或这更多
^     必须以该字符开始匹配
$     必须以该字符结束匹配
\b    边界符号指定字符在最前或者最后
\B    非边界符号 被修饰的字符不能出现在开头结束以及空格后面

A 从开始字符开始匹配
D 结束符$后面不准有空格



//修正符号
i 不区分大小写
m 视为多行 仅在有^ $ 和 \n存在的时候才有用
s 视为一行 以多行相对
x 无视空白符号 可以 将# 字符 以及 下一个换行符之间的字符也忽略

*/
/*
$zz = '/\s/';

$string = '我爱喝9 你爱不爱喝';

if(preg_match($zz, $string, $matches)){
    echo '匹配到了，结果为：';
    var_dump($matches);
}else{
    echo '没有匹配到';
}
*/

/*
$string='[b]为你写诗[/b]
[i]为你做不可能事[/i]
[u]哎呀，哥不是写情诗[/u]
[color=Red]哥是在说歌词[/color]
[size=7]吴克群[/size]
[qq]123123123[/qq]';

//匹配UBB字符
$pattern=array(
    '/\[b\](.*)\[\/b\]/i',
    '/\[i\](.*)\[\/i\]/iU',
    '/\[u\](.*?)\[\/u\]/i',
    '/\[color=(.*?)\](.*?)\[\/color\]/',
    '/\[size=(\d)\](.*?)\[\/size\]/',
    '/\[qq\](\d{5,12})\[\/qq\]/',

);

//需要替换的UBB字符
$replace=array(
    '<b>$1</b><br />',       //   //1==$1
    '<i>\\1</i><br />',
    '<u>\\1</u><br />',
    '<font color="\\1">\\2</font><br />',
    '<font size="\\1">\\2</font><br />',
    '<a href="http://wpa.qq.com/msgrd?V=1&Uin=\\1&amp;Site=[Discuz!]&amp;Menu=yes"
 target="_blank"><img src="http://wpa.qq.com/pa?p=1:\\1:1" border="0"></a>',
);

//使用正则匹配$string，将$string当中的值变为$replace的效果
$ubb=preg_replace($pattern,$replace,$string);

echo $ubb;
*/


/*
//假设我们有一个多行的文件叫NoAlike.txt，没有的话你可以新建一个这个文件
$filename = 'D:\a.txt';

//打开这个文件，将文件内容赋值给$filestring
$filestring = file_get_contents($filename);

//因为每一行有一个回车即\n，我用\n来把这个字符串切割成数组
$filearray = explode("\n", $filestring);

//把切割成的数组，下标赋值给$key,值赋值给$val，每次循环将$key加1。
while (list($key, $val) = each($filearray)) {
    ++$key;
    $val = trim($val);

    //用的单引号，单引号不解释变量进行了拼接而已
    print 'Line' . $key .':'.  $val.'<br />';
}
*/

/*
$filename1 = 'D:\a.txt';
$fp = fopen($filename1, 'r+');//打开文件
$contents = fread($fp, 1024); //读取文件长度
fclose($fp);//关闭文件
var_dump($fp);
echo $contents;
*/



//'r'  只读方式打开，将文件指针指向文件头。
//'r+'  读写方式打开，将文件指针指向文件头。 覆盖原内容。
//'w'  写入方式打开，将文件指针指向文件头并将文件大小截为零。如果文件不存在则尝试创建之。
//'w+'  读写方式打开，将文件指针指向文件头并将文件大小截为零。如果文件不存在则尝试创建之。
//'a'  写入方式打开，将文件指针指向文件末尾。如果文件不存在则尝试创建之。不覆盖
//'a+'  读写方式打开，将文件指针指向文件末尾。如果文件不存在则尝试创建之。
//'x'  创建并以写入方式打开，将文件指针指向文件头。如果文件已存在，则 fopen()  调用失败并返回 FALSE ，并生成一条 E_WARNING  级别的错误信息。
                //如果文件不存在则尝试创建之。这和给底层的 open(2) 系统调用指定 O_EXCL|O_CREAT 标记是等价的。
//'x+'  创建并以读写方式打开，其他的行为和 'x' 一样


//对文件的增删改查
//----
//----
//----

/*
//新增文件


$data = "这是第一个文件名为first。";
$numbytes = file_put_contents('first.txt', $data);//不写路径，文件就生成在对应的包下
if($numbytes){
    echo '写入成功，我们读取看看结果试试：'.'<br>';

    echo file_get_contents('first.txt').'<br>';

}else{
    echo '写入失败或者没有权限，注意检查'.'<br>';
}


//修改文件内容



$filename = 'first1.txt';
$fp= fopen($filename, "a");
$time=getdate();
$time2=$time['year'].'年'.$time['mon'].'月'.$time['mday'].'日'.$time['hours'].'时'.$time['minutes'].'分'.$time['seconds'].'秒';
$len = fwrite($fp, '修改first文件！修改时间为：'.$time2);
fclose($fp);
echo file_get_contents('first.txt').'<br>';
print $len .'字节被写入了';


//创建了一个临时文件


$handle = tmpfile();
//向里面写入了数据
$numbytes = fwrite($handle, '写入临时文件');

//关闭临时文件，文件即被删除
fclose($handle);

echo  '向临时文件中写入了'.$numbytes . '个字节';


//修改文件名
$filename = 'four.txt';
//新文件名
$filename2 = 'first.txt';
//修改名字
if(rename($filename, $filename2)){
    echo $filename . '成功改名为' . $filename2 . '<br>';
}else{
    echo '改名失败';
}


//复制文件
$filename3 = 'second.txt';
$filename4 = 'third.txt';

if (copy($filename3, $filename4)){
    echo '文件复制成功'.'<br>';
}else{
echo '复制失败';
}

//删除文件
$filename3='third.txt';
if(unlink($filename3)){
    echo '文件删除成功';
}else{
echo '删除失败';
}
*/




/*
//文件检测，用于安装检测

//可以定义一批文件是否存在
$files = [
    'version.php',
    'uploads/',
    'Package',

];

//定义标志位变量
$flag = true;
foreach($files as  $v){

    //判断是文件还是文件夹

    if(file_exists($v)<>true){
        echo $v.' 不存在';
    }
    else {
        if (is_file($v)) {
            echo $v.' 是一个文件    ';

        } else if (is_dir($v)) {
            echo $v.' 是一个文件夹    ';

        }

        //判读是否可读

        if (is_readable($v)) {
            echo ' 可读';
        } else {
            echo '<font color="red">不可读</font>';
        }

        //判读时候可写

        if (is_writeable($v)) {
            echo '可写';
        } else {
            echo '<font color="red">不可写</font>';
        }

        //判读是否可以执行
        if (is_executable($v)) {
            echo '可执行';
        } else {
            echo '<font color="red"> 不可执行</font>';
        }

    }
    echo '<br />';
}

if($flag){
    echo '<a href="step1">下一步</a>';

}else{
    echo '不能进行安装';
}
*/



/*
//指针操作
//对文件进行读取，根据指针开始读取，其中fseek方法用来移动指针，到固定的位置开始读取文件
//fread方法将指针指向开头位置
$filename = 'first.txt';
$fp= fopen($filename, "r+");

//获取文件大小
echo $filename . '文件大小为: ' . filesize($filename) . ' bytes'.'<br>';

//每次只读取一个字符
echo  fgetc($fp).'<br>';

$i=0;
//我要全部读取可以,读取一次将结果赋值一次给$string
while($string = fgetc($fp)){

    echo $string;
    echo $i.'<br>';
    $i++;

}


echo '第一次读取数据: ';
echo fread($fp,13).'<br>';
//再下次再次打开文件之前接着上次读的地方继续读取
echo '第二次读取数据: ';
echo fread($fp,20).'<br>';
//指针设置回到开始处
rewind($fp);
//再读取，即从开始处读取
echo '指针回到开头';
echo fread($fp,13).'<br>';
//文件指针向后移动5个字符
fseek($fp,5);
//再看看文件中输出的是什么
echo '指针向后移动5个单位' ;
echo fread($fp,15).'<br>';
fclose($fp);
*/

/*
$fp = fopen("first.txt", "r+");
flock($fp, LOCK_EX);
// 进行排它型锁定
if (flock($fp, LOCK_EX)) {

    fwrite($fp, "文件这个时候被我独占了哟\n");

    // 释放锁定
    flock($fp, LOCK_UN);
} else {
    echo "锁失败，可能有人在操作，这个时候不能将文件上锁";
}

fclose($fp);
*/

/*
$dir = "d:/";

//判断是否是文件夹，是文件夹
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {


        //读取到最后返回false，停止循环
        while (($file = readdir($dh)) !== false) {
            echo "文件名为: $file : 文件的类型是: " . filetype($dir . $file) . "<br />";
        }

        closedir($dh);
    }
}
*/

/*
$path_parts = pathinfo('d:/www/index.inc.php');

echo '文件目录名：'.$path_parts['dirname']."<br />";
echo '文件全名：'.$path_parts['basename']."<br />";
echo '文件扩展名：'.$path_parts['extension']."<br />";
echo '不包含扩展的文件名：'.$path_parts['filename']."<br />";

echo "截取到.php  :".basename('d:/www/index.inc.php', ".php")."<br/>";

echo dirname(__FILE__);//返回当前文件夹所在路径
*/


?>
