<?php
for ($i=0; $i < count($_FILE['file']['name']); $i++) {

    /*
    用is_uploaded_file()函数判断是上传文件
    并且没有出现错
    */

    if(is_uploaded_file($_FILEs['file']['tmp_name'][$i]) && $_FILEs['file']['error'][$i] == 0){
        if(move_uploaded_file($_FILEs['file']['tmp_name'][$i],'upload/'.$_FILE['file']['name'][$i])){
            //用move_uploaded_file()函数移动文件到指定的位置并使用文件原名
            echo "上传成功";

        }else{

            echo '上传失败';

        }

    }else{

        echo '上传失败';

    }

}
?>