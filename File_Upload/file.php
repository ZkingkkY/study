<?php
if ($_FILES['file']['error'] > 0) {
    switch ($_FILES['file']['error']) {
        //错误码不为0，即文件上传过程中出现了错误
        case '1':
            echo '文件过大';
            break;
        case '2':
            echo '文件超出指定大小';
            break;
        case '3':
            echo '只有部分文件被上传';
            break;
        case '4':
            echo '文件没有被上传';
            break;
        case '6':
            echo '找不到指定文件夹';
            break;
        case '7':
            echo '文件写入失败';
            break;
        default:
            echo "上传出错<br/>";
    }
} else {

    $MAX_FILE_SIZE = 100000;
    if ($_FILES['file']['size'] > $MAX_FILE_SIZE) {
        exit("文件超出指定大小");

    }

    $allowSuffix = array(
        'jpg',
        'gif',
    );

    $myImg = explode('.', $_FILES['file']['name']);

    $myImgSuffix = array_pop($myImg);

    if (!in_array($myImgSuffix, $allowSuffix)) {
        exit("文件后缀名不符");
    }

    $allowMime = array(
        "image/jpg",
        "image/jpeg",
        "image/pjpeg",
        "image/gif",
    );

//防止直接修改后缀名，判断格式
    if (!in_array($_FILES['file']['type'], $allowMime)) {
        exit('文件格式不正确，请检查');
    }

    $path = "upload/images/";
    $name = date('Y') . date('m') . date("d") . date('H') . date('i') . date('s') . rand(0, 9) . '.' . $myImgSuffix;

//移动临时文件至固定文件夹
    if (is_uploaded_file($_FILES['file']['tmp_name'])) {

        if (move_uploaded_file($_FILES['file']['tmp_name'], $path . $name)) {
            echo "上传成功";
        } else {
            echo '上传失败';
        }

    } else {
        echo '不是上传文件';
    }

}
?>