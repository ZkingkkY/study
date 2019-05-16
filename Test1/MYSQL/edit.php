<?php
include 'config.php';
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME);
if (mysqli_errno($conn))
{    mysqli_error($conn);
    exit;}
mysqli_set_charset($conn, DB_CHARSET);


if (is_numeric($_GET['id'])) {

    $id = (int) $_GET['id'];
}

$sql = "select * from student  where id ='$id'";
$result=mysqli_query($conn,$sql);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "账号：".$row['ID'].'<br/>';
        echo "姓名：".$row['name'].'<br/>';
        echo "年龄：".$row['age'].'<br/>';

    }
?>
    <form action="update.php" method="post">

        新密码：<input type="password" name="password"><br />
        新姓名：<input type="text" name="name"><br />
        新年龄：<input type="text" name="age"><br />
        <input type="hidden" value="<?php echo $id;?>" name="id" />

        <input type="submit" value="提交">

    </form>
<?php

echo '<td><a href="manage.php"><button>返回</button></a> </td>';
mysqli_close($conn);

?>

