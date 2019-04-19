<?php
include 'config.php';

$id = (int) $_POST['id'];

if (trim($_POST['password'])) {

    $password = md5(trim($_POST['password']));

    $sql = "update user set password='" . $password . "' where id = $id";

} else {

    echo '修改成功';
}

$result = mysqli_query($conn, $sql);

if ($result) {
    echo '修改成功';
}