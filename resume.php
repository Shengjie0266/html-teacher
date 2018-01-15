<?php
session_start();
?>
<?php if (isset($_SESSION['id'])) {
    include("mysql_connect.inc.php");
    $sql = "SELECT * FROM `user` where id = '$id'";
    $result = mysqli_query($link, $sql);
    $row = @mysqli_fetch_row($result);
}
echo '
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>簡歷</title>
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
            <a class="navbar-brand" href = "index.php" ><span style="font-family: cwTeXYen, sans-serif;"> 陳兆南</span></a >
        </div >
        <div class="collapse navbar-collapse" id = "myNavbar" >
            <ul class="nav navbar-nav" >';
if (isset($_SESSION['id'])) {
    echo '<li ><a href = "logout.php" ><span class="glyphicon glyphicon-log-in"> Logout</span></a ></li >
<li ><a href = "modify.php" style="font-family: cwTeXYen,sans-serif;"> 控制台</a></li>';
} else {
    echo '<li><a href="login.php"><span class="glyphicon glyphicon-log-in"> Login</span></a></li>';
}
echo '<li ><a href = "index.php" style="font-family: cwTeXYen, sans-serif;"> 首頁</a ></li >
                <li class="active"><a href = "resume.php" style="font-family: cwTeXYen, sans-serif; font-size: 1.3em"> 簡歷</a ></li >
                <li ><a href = "academic.php" style="font-family: cwTeXYen, sans-serif;"> 學術</a ></li >
                <li ><a href = "book.php" style="font-family: cwTeXYen, sans-serif;"> 著作</a ></li >
                <li ><a href = "awards.php" style="font-family: cwTeXYen, sans-serif;"> 獲獎</a ></li >
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
    <div align="center" class="form">
    <table border="1" width="500px" style="background:url(img/sakura.png)">
        <thead>
　<tr>
　<th align="center" style="font-size: 2em;font-family: cwTeXYen, sans-serif;"><span style="color:black;font-family: cwTeXYen, sans-serif;">學歷</span></th>
　</tr>
        </thead>
        <tbody>
          <tr>
              <td align="center" style="font-size: 1.5em;color:#9100ff;font-family: cwTeXYen, sans-serif;">長庚大學 電子工程 博士</td>
          </tr>
        </tbody>
    </table>
        <table border="1" width="500px" style="background:url(img/sakura.png)">
            <thead>
　<tr>
　<th align="center" style="font-size: 2em"><span style="color: black;font-family: cwTeXYen, sans-serif;">經歷</span></th>
　</tr>
            </thead>
            <tbody>
            <tr>
                <td align="center" style="font-size: 1.5em;color: #9100ff;font-family: cwTeXYen, sans-serif;">南開科技大學 兼任助理教授</td>
            </tr>
            <tr>
                <td align="center" style="font-size: 1.5em;color:#9100ff;font-family: cwTeXYen, sans-serif;">中華映管股份有限公司 研發設計工程師</td>
            </tr>
            <tr>
                <td align="center" style="font-size: 1.5em;color:#9100ff;font-family: cwTeXYen, sans-serif;">工業技術研究院顯示中心 研發工程師</td>
            </tr>
            </tbody>
        </table>
        <table border="1" width="500px" style="background:url(img/sakura.png)">
            <thead>
　<tr>
　<th align="center" style="font-size: 2em"><span style="color: black;font-family: cwTeXYen, sans-serif;">專長</span></th>
　</tr>
            </thead>
            <tbody>
            <tr>
                <td align="center" style="font-size: 1.5em;color:#9100ff;font-family: cwTeXYen, sans-serif;">顯示技術</td>
            </tr>
            <tr>
                <td align="center" style="font-size: 1.5em;color:#9100ff;font-family: cwTeXYen, sans-serif;">媒體與互動設計</td>
            </tr>
            <tr>
                <td align="center" style="font-size: 1.5em; color:#9100ff;font-family: cwTeXYen, sans-serif;">數位學習內容</td>
            </tr>
            </tbody>
        </table>
    </div>

</div >

<footer class="footer container-fluid text-center" >
    <p style="font-family: Great Vibes, cursive; font-size: 1.2em"> Powered by Shengjie </p >
</footer >
</body>
</html>';
?>