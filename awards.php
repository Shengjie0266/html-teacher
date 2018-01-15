<?php
session_start();
?>

<?php if (isset($_SESSION['id'])) {
    include("mysql_connect.inc.php");
    $sql = "SELECT * FROM `user` where id = '$id'";
    $result = mysqli_query($link,$sql);
    $row = @mysqli_fetch_row($result);
}
echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>獲獎</title>
    <meta name = "viewport" content = "width=device-width; initial-scale=1; maximum-scale=1.0; user-scalable=0;" >
    <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script >
    <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script >
    <link rel = "stylesheet" type = "text/css" href = "css/style.css" />
    <style>
@import url(https://fonts.googleapis.com/css?family=Kavivanar);
@import url(//fonts.googleapis.com/earlyaccess/cwtexyen.css);
@import url(https://fonts.googleapis.com/css?family=Great+Vibes);
</style> 
</head>
<body>
<nav class="navbar navbar-inverse" >
    <div class="container-fluid" >
        <div class="navbar-header" >
            <button type = "button" class="navbar-toggle" data-toggle = "collapse" data-target = "#myNavbar" >
                <span class="icon-bar" ></span >
                <span class="icon-bar" ></span >
                <span class="icon-bar" ></span >
            </button >
            <a class="navbar-brand" href = "index.php"style="font-family: cwTeXYen, sans-serif;" > 陳兆南</a >
        </div >
        <div class="collapse navbar-collapse" id = "myNavbar" >
            <ul class="nav navbar-nav" >';
if (isset($_SESSION['id'])) {
    echo '<li ><a href = "logout.php" ><span class="glyphicon glyphicon-log-in"> Logout</span></a ></li >
<li ><a href = "controltable.php" style="font-family: cwTeXYen, sans-serif;"> 控制台</a ></li >';
}else{
    echo '<li><a href="login.php"><span class="glyphicon glyphicon-log-in"> Login</span></a></li>';
}
?>
<li ><a href = "index.php" style="font-family: cwTeXYen, sans-serif;" > 首頁</a ></li >
                <li ><a href = "resume.php" style="font-family: cwTeXYen, sans-serif;"> 簡歷</a ></li >
                <li ><a href = "academic.php" style="font-family: cwTeXYen, sans-serif;" > 學術</a ></li >
                <li ><a href = "book.php" style="font-family: cwTeXYen, sans-serif;" > 著作</a ></li >
                <li class="active"><a href = "awards.php" style="font-family: cwTeXYen, sans-serif; font-size: 1.3em" > 獲獎</a ></li >
                <li ><a href = "link.php" style="font-family: cwTeXYen, sans-serif;"> 常用連結</a ></li >
            </ul >            
            <ul class="nav navbar-nav navbar-right" >
            </ul >  
             </div >
       </div >
</nav > 
<div class="container-fluid text-center" >
    <div class="row" >
        <div class="col-sm-3" style = "background-color:white;" ></div >
        <div class="col-sm-6" style = "background-color:white;" ></div >
        <div class="col-sm-3" style = "background-color:white;" ></div >
    </div >
    <div align="center">
        <table border="1" style="margin: 20px;border:3px #ada8a8 double;">
        <?php
            include("mysql_connect.inc.php");

            $sql = "SELECT * FROM award";
            $result = $link->query($sql);
            while ($row = mysqli_fetch_row($result)) {
                echo "<tr>";
                echo "<td style='background-color: #fff4b2;padding-left: 10px;padding-right: 10px;padding-top: 5px;padding-bottom: 5px;'>$row[0]</td>";
                echo "<td style='background: url(img/upfeathers.png);padding-left: 5px;padding-right: 5px;padding-top: 5px;padding-bottom: 5px;color: rgba(16,14,16,0.7);font-size: 1.5em;font-family: cwTeXYen, sans-serif;'>$row[1]</td>";
                echo "</tr>";
            }
            ?>

        </table>

    </div>

</div >

<footer class="footer container-fluid text-center" >
    <p style="font-family: Great Vibes, cursive; font-size: 1.2em"> Powered by Shengjie </p >
</footer >
</body>
</html>
