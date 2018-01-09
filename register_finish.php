<?php session_start(); ?>
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/29
 * Time: 上午 11:07
 */
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<?php
include("mysql_connect.inc.php");

$id = $_POST['id'];
$pw = SHA1($_POST['pw']);
$pw2 =SHA1($_POST['pw2']);
$email = $_POST['email'];
$phone = $_POST['phone'];
$type = $_POST['type'];
//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($id != null && $pw != null && $pw2 != null && $pw == $pw2)
{
    //新增資料進資料庫語法
    $sql = "insert into `user` (id, passwd, email, phone, `type`) values ('$id', '$pw', '$email', '$phone', '$type')";
    if(@mysqli_query($link,$sql))
    {
        echo '新增成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
    }
    else
    {
        echo '新增失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>