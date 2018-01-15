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
    <title>陳兆南教授 web </title >
    <meta charset = "utf-8" >
    <meta name = "viewport" content = "width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" >
    <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script >
    <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script >
    <link rel = "stylesheet" type = "text/css" href = "css/style.css" /> 
    <style>
@import url(https://fonts.googleapis.com/css?family=Kavivanar);
@import url(//fonts.googleapis.com/earlyaccess/cwtexyen.css);
@import url(https://fonts.googleapis.com/css?family=Great+Vibes);
</style> 
</head >
<body>

<nav class="navbar navbar-inverse" >
    <div class="container-fluid" >
        <div class="navbar-header" >
            <button type = "button" class="navbar-toggle" data-toggle = "collapse" data-target = "#myNavbar" >
                <span class="icon-bar" ></span >
                <span class="icon-bar" ></span >
                <span class="icon-bar" ></span >
            </button >
            <a class="navbar-brand" href = "index.php" ><span style="font-family: cwTeXYen, sans-serif;"> 陳兆南</span></a >
        </div >
        <div class="collapse navbar-collapse" id = "myNavbar" >
            <ul class="nav navbar-nav" >';
if (isset($_SESSION['id'])) {
    echo '<li ><a href = "logout.php" ><span class="glyphicon glyphicon-log-in"> Logout</span></a ></li >
<li ><a href = "controltable.php" ><span style="font-family: cwTeXYen, sans-serif;"> 控制台</span></a ></li >';
}else{
    echo '<li><a href="login.php"><span class="glyphicon glyphicon-log-in"> Login</a></li>';
}
echo '<li class="active" ><a href = "index.php" ><span style="font-family: cwTeXYen, sans-serif;font-size: 1.3em"> 首頁</span></a ></li >
                <li ><a href = "resume.php" ><span style="font-family: cwTeXYen, sans-serif;"> 簡歷</span></a ></li >
                <li ><a href = "academic.php" ><span style="font-family: cwTeXYen, sans-serif;"> 學術</span></a ></li >
                <li ><a href = "book.php" ><span style="font-family: cwTeXYen, sans-serif;"> 著作</span></a ></li >                
                <li ><a href = "awards.php" ><span style="font-family: cwTeXYen, sans-serif;"> 獲獎</span></a ></li >                
                <li ><a href = "link.php" ><span style="font-family: cwTeXYen, sans-serif;"> 常用連結</span></a ></li >
            </ul >
            <ul class="nav navbar-nav navbar-right" >
            </ul >
             </div >
       </div >
</nav >
<div class="body1">
<div class="container-fluid text-center" >
    <div class="row" >
        <div class="col-sm-3" style = "background-color:blanchedalmond;" ></div >
        <div class="col-sm-12" style = "background-color:#dc7e65;" ><img id = "photo"src = "img/01.jpg" width = "300px" height = "300px" ></div >
        <div class="col-sm-3" style = "background-color:blanchedalmond;" ></div >
    </div >
    <h3 align = "center" ><span style = "color: darkblue;font-family: cwTeXYen, sans-serif;" ><strong > 姓名:</strong ></span ><span style = "color: darksalmon;font-family: cwTeXYen, sans-serif;" ><strong > 陳兆南</strong ></span > / <span style = "color:darksalmon;font-family: Kavivanar, cursive;" > Chao - Nan Chen </span ></h3 >
    <h3 align = "center" ><span style = "color: darkblue;font-family: cwTeXYen, sans-serif;" ><strong > 任職單位:</strong ></span ><span style = "color: darksalmon;font-family: cwTeXYen, sans-serif;" ><strong > 資訊工程學系 副教授 </strong ></span ></h3 >
    <h3 align = "center" ><span style = "color: darkblue; font-family: Kavivanar, cursive;"  ><strong > E-mail:</strong ></span ><span style = "color: darksalmon;font-family: Kavivanar, cursive;"><strong > chencn@asia.edu.tw </strong ></span ></h3 >
    <h3 align = "center" ><span style = "color: darkblue;font-family: cwTeXYen, sans-serif;" ><strong > 辦公室:</strong ></span ><span style = "color: darksalmon;font-family: Kavivanar, cursive;"><strong > 8019 </strong ></span ></h3 >
    <h3 align = "center" ><span style = "color: darkblue;font-family: cwTeXYen, sans-serif;" ><strong > 分機:</strong ></span ><span style = "color: darksalmon;font-family: Kavivanar, cursive;"><strong > 48019 </strong ></span ></h3 >
    
</div >
</div>

<footer class="footer container-fluid text-center" >
    <p style="font-family: Great Vibes, cursive; font-size: 1.2em"> Powered by Shengjie </p >
</footer >

</body >
</html > ';
?>
