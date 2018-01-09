<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html ;charset= utf-8"/>
<?php
include("mysql_connect.inc.php");
$id = $_POST['id'];
$pw = SHA1($_POST['pw']);

$sql = "SELECT * FROM `user` where id = '$id'";
$result = mysqli_query($link,$sql);
$row = @mysqli_fetch_row($result);

if ($id != null && $pw != null && $row[0] == $id && $row[1] == $pw) {
    $_SESSION['id'] = $id;
    echo '<p align="center">登入成功</p>';
    echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
} else {
    echo '<p align="center">登入失敗</p>';
    echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}
?>