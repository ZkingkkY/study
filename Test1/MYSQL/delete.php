<?php
include 'config.php';
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME);
if (mysqli_errno($conn))
{    mysqli_error($conn);
    exit;}
mysqli_set_charset($conn, DB_CHARSET);


if (is_array($_POST['id'])) {

    $id = join(',', $_POST['id']);

} elseif (is_numeric($_GET['id'])) {

    $id = (int) $_GET['id'];

} else {
    echo '请勾选账号';
    exit;
}

$sql = "delete from student where id in($id)";
mysqli_query($conn, $sql);
$result=mysqli_query($conn, $sql);
if($result){
    echo '删除账号'.$id.',成功！'.'<br/>';
}else {
    echo '删除失败';
}

?>