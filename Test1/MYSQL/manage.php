<?php
/**
 * Created by PhpStorm.
 * User: zky
 * Date: 2019/4/16
 * Time: 17:40
 */
include 'config.php';
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PWD, DB_NAME);
if (mysqli_errno($conn))
{    mysqli_error($conn);
    exit;
}
mysqli_set_charset($conn, DB_CHARSET);



$count_sql = 'select count(id) as c from student';

$result1 = mysqli_query($conn, $count_sql);

$data = mysqli_fetch_assoc($result1);

//得到总的用户数
$count = $data['c'];
$page = isset($_GET['page']) ? (int) $_GET['page'] : 1;


//每页显示数
$num = 5;

//得到总页数
$total = ceil($count / $num);

if ($page <= 1) {
    $page = 1;
}

if ($page >= $total) {
    $page = $total;
}

$offset = ($page - 1) * $num;


$sql = "select * from student order by id ASC limit $offset , $num";
$result = mysqli_query($conn, $sql);
// 利用复选框删除
if ($result && mysqli_num_rows($result)) {

    echo '<form action="delete.php" method="post">';
    echo '<table width="800" border="1">';

    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td width="30"><input type="checkbox" name="id[]" value="' . $row['ID'] . '" /></tdwidth>';
        echo '<td width="200">' . $row['ID'] .'</td>';
        echo '<td width="200">' . $row['name'] . '</td>';
        echo '<td width="100">' . $row['age']. '</td>';
        echo '<td width="100"><a href="edit.php?id=' . $row['ID'] . '">编辑用户</a> </td>';
        echo '</tr>';
    }

    echo '<tr><td colspan="5"><a href="manage.php?page=1">首页</a>
            <a href="manage.php?page=' . ($page - 1) . '">上一页</a>
             <a href="manage.php?page=' . ($page + 1) . '">下一页</a>
              <a href="manage.php?page=' . $total . '">尾页</a>  当前是第 ' . $page . '页  共' . $total . '页 </td></tr>';

    echo '</table>';
    echo '<td><input type="submit" value="删除" /></td>';
    echo '</form>';

} else {
    echo '没有数据';
}

echo '<td><a href="main.php"><button>返回</button></a> </td>';
mysqli_close($conn);
?>