<?php session_start(); ?>
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/29
 * Time: 上午 11:08
 */
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body background="img/bg1.jpg">

</body>
<?php
include("mysql_connect.inc.php");

if($_SESSION['id'] != null)
{
    //將$_SESSION['username']丟給$id
    //這樣在下SQL語法時才可以給搜尋的值
    $id = $_SESSION['id'];
    //若以下$id直接用$_SESSION['username']將無法使用
    $sql = "SELECT * FROM `user` where `id`='$id'";
    $result = mysqli_query($link,$sql);
    $row = @mysqli_fetch_row($result);

    echo "<form name=\"form\" method=\"post\" action=\"update_finish.php\">";
    echo "帳號：<input type=\"text\" name=\"id\" value=\"$row[0]\" />(此項目無法修改) <br>";
    echo "密碼：<input type=\"password\" name=\"pw\" value=\"$row[1]\" /> <br>";
    echo "再一次輸入密碼：<input type=\"password\" name=\"pw2\" value=\"$row[1]\" /> <br>";
    echo "信箱：<input type=\"text\" name=\"email\" value=\"$row[2]\" /> <br>";
    echo "電話：<input type=\"text\" name=\"phone\" value=\"$row[3]\" /> <br>";
    echo "備註：<textarea name=\"type\" cols=\"45\" rows=\"5\">$row[4]</textarea> <br>";
    echo "<input type=\"submit\" name=\"button\" value=\"確定\" />";
    echo "</form>";
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>