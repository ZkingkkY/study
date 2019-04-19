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

$sql = "select id,username from  where id = " . $id;
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);

?>
    <form action="update.php" method="post">

        账号：<input type="text" name="id" value="<?php echo $data['username'];?>"><br />
        密码：<input type="password" name="password"><br />
        姓名：<input type="text" name="name"><br />
        年龄：<input type="text" name="age"><br />

        <input type="hidden" value="<?php echo $data['id'];?>" name="id" />

        <input type="submit" value="提交">

    </form>
<?php
mysqli_close($conn);

?>

