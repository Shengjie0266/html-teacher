<?php session_start(); ?>
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/29
 * Time: 上午 11:11
 */
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<?php
include("mysql_connect.inc.php");

$id = $_POST['id'];
$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];
$telephone = $_POST['telephone'];
$address = $_POST['address'];
$other = $_POST['other'];
//紅色字體為判斷密碼是否填寫正確
if($_SESSION['username'] != null && $pw != null && $pw2 != null && $pw == $pw2)
{
    $id = $_SESSION['username'];

    //更新資料庫資料語法
    $sql = "update member_table set password=$pw, telephone=$telephone, address=$address, other=$other where username='$id'";
    if(mysql_query($sql))
    {
        echo '修改成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
    }
    else
    {
        echo '修改失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>