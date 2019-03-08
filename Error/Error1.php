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
?>