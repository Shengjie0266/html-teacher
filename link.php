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
    <title>常用連結</title>
    <meta name = "viewport" content = "width=device-width; initial-scale=1; maximum-scale=1.0; user-scalable=1;" >
    <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script >
    <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script >
    <link rel = "stylesheet" type = "text/css" href = "css/style.css" />
</head>
<body>
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
if (isset($_SESSION['id'])) {
    echo '<li ><a href = "logout.php" ><span class="glyphicon glyphicon-log-in"> Logout</span></a ></li >
<li ><a href = "member.php" > 控制台</a ></li >';
}else{
    echo '<li><a href="login.php"><span class="glyphicon glyphicon-log-in"> Login</span></a></li>';
}
echo '<li ><a href = "index.php" > 首頁</a ></li >
                <li ><a href = "resume.php" > 簡歷</a ></li >
                <li ><a href = "academic.php" > 學術</a ></li >
                <li ><a href = "book.php" > 著作</a ></li >
                <li class="active"><a href = "link.php" > 常用連結</a ></li >
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
    <a href="https://www.facebook.com/nankei"><img src="img/fb.png" alt="" style="margin-top: 170px; width: 150px"></a><br>
    <a href="http://csie.asia.edu.tw/"><img src="img/csie.gif" alt="" style="margin-top: 100px; width: 250px"></a>
    
</div >

<footer class="footer container-fluid text-center" >
    <p > Powered by Shengjie </p >
</footer >
</body>
</html>';
    ?>