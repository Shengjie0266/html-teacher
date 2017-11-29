<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/22
 * Time: 上午 11:26
 */
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<?php

$db_server = "localhost";
$db_name = "105021040";
$db_user = "105021040";
$db_passwd = "#9oybGtrt";

$link=mysqli_connect("localhost", $db_user, $db_passwd,$db_name);
    die("無法對資料庫連線");

mysql_query("SET NAMES utf8");

if(!@mysql_select_db($db_name))
    die("無法使用資料庫");
?>
