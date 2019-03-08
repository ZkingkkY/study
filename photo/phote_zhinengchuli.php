<?php

/*
 * 智能呢个处理照片
 * */

water('D:\PHP\XAMPP\htdocs\project\study\photo\a.png','D:\PHP\XAMPP\htdocs\project\study\photo\baidu.png',0,50);

function water($img,$water,$pos=9,$tm=100){

function getImageInfo($path) {
        $info = getimagesize($path);
        $data['width'] = $info[0];
        $data['height'] = $info[1];
        $data['type'] = $info['mime'];
        return $data;
    }

    $info=getImageInfo($img);

    $logo=getImageInfo($water);

    $dst=openImg($img,$info['type']);
    $src=openImg($water,$logo['type']);


    switch($pos){
        case 1:
            $x=0;
            $y=0;
            break;
        case 2:
            $x=ceil(($info['width']-$logo['width'])/2);
            $y=0;
            break;
        case 3:
            $x=$info['width']-$logo['width'];
            $y=0;
            break;
        case 4:
            $x=0;
            $y=ceil(($info['height']-$logo['height'])/2);
            break;
        case 5:
            $x=ceil(($info['width']-$logo['width'])/2);
            $y=ceil(($info['height']-$logo['height'])/2);
            break;
        case 6:
            $x=$info['width']-$logo['width'];
            $y=ceil(($info['height']-$logo['height'])/2);
            break;

        case 7:
            $x=0;
            $y=$info['height']-$logo['height'];
            break;
        case 8:
            $x=ceil(($info['width']-$logo['width'])/2);
            $y=$info['height']-$logo['height'];
            break;
        case 9:
            $x=$info['width']-$logo['width'];
            $y=$info['height']-$logo['height'];
            break;
        case 0:
        default:
            $x=mt_rand(0,$info['width']-$logo['width']);
            $y=mt_rand(0,$y=$info['height']-$logo['height']);
            break;

    }
    imagecopymerge($dst,$src,$x,$y,0,0,$logo['width'],$logo['height'],$tm);


    header('Content-type:image/.png');
    imagejpeg($dst);

    imagedestory($dst);
    imagedestory($src);

}



function openImg($path,$type){
    switch($type){
        case 'image/jpeg':
        case 'image/jpg':
        case 'image/pjpeg':
            $img=imagecreatefromjpeg($path);
            break;
        case 'image/png':
        case 'image/x-png':
            $img=imagecreatefrompng($path);
            break;
        case 'image/gif':
            $img=imagecreatefromgif($path);
            break;
        case 'image/wbmp':
            $img=imagecreatefromwbmp($path);
            break;
        default:
            exit('图片类型不支持');


    }
    return $img;
}




?>