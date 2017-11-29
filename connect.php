<?php session_start(); ?>
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/22
 * Time: 上午 11:34
 */
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<?php
include("mysql_connect.inc.php");
$id = $_POST['id'];
$pw = sha1($_POST['pw']);



$sql = "SELECT * FROM member_table where username = '$id'";
$result=$link->query($sql);
$row=$result->fetch_row();

if($id != null && $pw != null && $row[0] == $id && $row[2] == $pw)
{
    $_SESSION['id'] = $id;
    echo '登入成功!';
    echo '<meta http-equiv=REFRESH CONTENT=1;url=member.php>';
}
else
{
    echo '登入失敗!';
    echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}
?>
}