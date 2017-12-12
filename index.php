<?php
session_start();
?>
<?php if (isset($_SESSION['username'])) {
    include("mysql_connect.inc.php");
    $sql = "SELECT * FROM user where id = '$id'";
    $result = $link->query($sql);
    $row = $result->fetch_row();
}
echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <title>陳兆南教授\'s web </title >
    <meta charset = "utf-8" >
    <meta name = "viewport" content = "width=device-width, initial-scale=1" >
    <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script >
    <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script >
    <link rel = "stylesheet" type = "text/css" href = "css/style.css" />  
</head >
<body >

<nav class="navbar navbar-inverse" >
    <div class="container-fluid" >
        <div class="navbar-header" >
            <button type = "button" class="navbar-toggle" data - toggle = "collapse" data - target = "#myNavbar" >
                <span class="icon-bar" ></span >
                <span class="icon-bar" ></span >
                <span class="icon-bar" ></span >
            </button >
            <a class="navbar-brand" href = "#" > 陳兆南</a >
        </div >
        <div class="collapse navbar-collapse" id = "myNavbar" >
            <ul class="nav navbar-nav" >';
if (isset($_SESSION['username'])) {
    echo '<li ><a href = "logout.php" > 登出</a ></li >
<li ><a href = "#" > 控制台</a ></li >';
}
echo '<li class="active" ><a href = "#" > 首頁</a ></li >
                <li ><a href = "#" > 簡歷</a ></li >
                <li ><a href = "#" > 學術</a ></li >
                <li ><a href = "#" > 著作</a ></li >
                <li ><a href = "#" > 學生</a ></li >
                <li ><a href = "#" > 常用連結</a ></li >
            </ul >
            <ul class="nav navbar-nav navbar-right" >
                <li ><a href = "login.php" ><span class="glyphicon glyphicon-log-in" ></span > Login</a ></li >
            </ul >
        </div >
    </div >
</nav >

<div class="container-fluid text-center" >
    <div class="row" >
        <div class="col-sm-3" style = "background-color:white;" ></div >
        <div class="col-sm-6" style = "background-color:white;" ><img id = "photo"src = "img/01.jpg" width = "300px" height = "300px" ></div >
        <div class="col-sm-3" style = "background-color:white;" ></div >
    </div >
    <h3 align = "center" ><span style = "color: darkblue" ><strong > 姓名:</strong ></span ><span style = "color: darksalmon" ><strong > 陳兆南</strong ></span > / <span style = "color:darksalmon" > Chao - Nan Chen </span ></h3 >
    <h3 align = "center" ><span style = "color: darkblue" ><strong > 任職單位:</strong ></span ><span style = "color: darksalmon" ><strong > 資訊工程學系 副教授 </strong ></span ></h3 >
    <h3 align = "center" > E</h3 >
</div >

<footer class="footer container-fluid text-center" >
    <p > Powered by Shengjie </p >
</footer >

</body >
</html > ';
?>
