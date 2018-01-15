<?php
session_start();
?>
<?php
//if (isset($_SESSION['id'])) {
include("mysql_connect.inc.php");

//}

$awardnum = $_POST['award'];
$awardcon = $_POST['infocontent'];


if ($awardnum != null) {
    $sql = "UPDATE award SET `info` = '$awardcon' WHERE `award`.id='$awardnum'";
    $result = mysqli_query($link, $sql);
    $row = @mysqli_fetch_row($result);

    if ($result) {
        echo '<p align="center">修改成功</p>';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=awards.php>';
    }
}else
    ?>