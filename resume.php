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
    <meta charset="UTF-8">
    <title>簡歷</title>
    <meta name = "viewport" content = "width=device-width, initial-scale=1" >
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
            if (isset($_SESSION['username'])) {
    echo '<li ><a href = "logout.php" > 登出</a ></li >
<li ><a href = "#" > 控制台</a ></li >';
}
echo '<li ><a href = "index.php" > 首頁</a ></li >
                <li class="active"><a href = "resume.php" > 簡歷</a ></li >
                <li ><a href = "academic.php" > 學術</a ></li >
                <li ><a href = "book.php" > 著作</a ></li >
                <li ><a href = "link.php" > 常用連結</a ></li >
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
        <div class="col-sm-6" style = "background-color:white;" ></div >
        <div class="col-sm-3" style = "background-color:white;" ></div >
    </div >
    <div align="center" class="form">
    <table border="1" width="500px">
        <thead>
　<tr>
　<th align="center" style="font-size: 2em"><span style="color:black">學歷</span></th>
　</tr>
        </thead>
        <tbody>
          <tr>
              <td align="center" style="font-size: 1.5em;color:blue">長庚大學 電子工程 博士</td>
          </tr>
        </tbody>
    </table>
        <table border="1" width="500px">
            <thead>
　<tr>
　<th align="center" style="font-size: 2em"><span style="color: black">經歷</span></th>
　</tr>
            </thead>
            <tbody>
            <tr>
                <td align="center" style="font-size: 1.5em;color: blue">南開科技大學 兼任助理教授</td>
            </tr>
            <tr>
                <td align="center" style="font-size: 1.5em;color:blue">中華映管股份有限公司 研發設計工程師</td>
            </tr>
            <tr>
                <td align="center" style="font-size: 1.5em;color:blue">工業技術研究院顯示中心 研發工程師</td>
            </tr>
            </tbody>
        </table>
        <table border="1" width="500px">
            <thead>
　<tr>
　<th align="center" style="font-size: 2em"><span style="color: black">專長</span></th>
　</tr>
            </thead>
            <tbody>
            <tr>
                <td align="center" style="font-size: 1.5em;color:blue">顯示技術</td>
            </tr>
            <tr>
                <td align="center" style="font-size: 1.5em;color:blue">媒體與互動設計</td>
            </tr>
            <tr>
                <td align="center" style="font-size: 1.5em; color:blue">數位學習內容</td>
            </tr>
            </tbody>
        </table>
    </div>

</div >

<footer class="footer container-fluid text-center" >
    <p > Powered by Shengjie </p >
</footer >
</body>
</html>';
?>