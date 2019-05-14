<?php
/**
 * Created by PhpStorm.
 * User: zky
 * Date: 2019/5/13
 * Time: 9:56
 */
session_start();
unset($_SESSION['goods']);
unset( $_SESSION['totalPrice']);
header('location: goodsList.php');