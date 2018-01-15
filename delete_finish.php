<?php session_start(); ?>
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/29
 * Time: 上午 11:20
 */
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<?php
include("mysql_connect.inc.php");
$id = $_POST['id'];
if($_SESSION['id'] != null){
    //刪除資料庫資料語法
    $sql = "delete from `user` where `id`='$id'";
    if(@mysqli_query($link,$sql))
    {
        echo '刪除成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=modify.php>';
    }
    else
    {
        echo '刪除失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=modify.php>';
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>