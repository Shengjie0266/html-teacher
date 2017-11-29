<?php session_start(); ?>
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/29
 * Time: 上午 10:57
 */
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<?php
//將session清空
unset($_SESSION['username']);
echo '登出中......';
echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
?>