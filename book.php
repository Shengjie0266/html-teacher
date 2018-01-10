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
    <title>著作</title>
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
                <li class="active"><a href = "book.php" > 著作</a ></li >
                <li ><a href = "link.php" > 常用連結</a ></li >
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
            <tr>
                　<td colspan="2" style="padding: 3px 2px 3px 2px;font-size: 2em;background-color: #b9bbff" align="left">期刊論文</td>
                　</tr>
            　<tr style="background-color: #f9c020">
            　<td style="padding: 5px 7px 5px 7px" align="center">1</td>
            　<td style="padding: 3px 2px 3px 6px">Ag–TiO2 composite photoelectrode for dye-sensitized solar cell ，APPLIED PHYSICS A-MATERIALS SCIENCE & PROCESSING ,SCI<br>
            吳宛玉(Wan-Yu Wu)，徐俊發(Chun-Fa Hsu)，吳孟軍(Menq-Jion Wu)，陳兆南(CHAO-NAN CHEN)，黃俊杰(Jung-Jie Huang)<br>
            2017 Apr，123(5):1-8</td>
            　</tr>
            　<tr style="background-color: #faf193">
            　<td style="padding: 5px 7px 5px 7px" align="center">2</td>
            　<td style="padding: 3px 2px 3px 6px">Antireflection coating of SiO2 thin film in dye-sensitized solar cell prepared by liquid phase deposition ，SURFACE & COATINGS TECHNOLOGY ,SCI<br>
            陳兆南(CHAO-NAN CHEN)，吳孟軍(Menq-Jion Wu)，徐俊發(Chun-Fa Hsu)，黃俊杰(Jung-Jie Huang)<br>
            2017 Jan，320():28-33</td>
            　</tr>
            <tr style="background-color: #f9c020">
                　<td style="padding: 5px 7px 5px 7px" align="center">3</td>
                　<td style="padding: 3px 2px 3px 6px">Properties of double-layer Al2O3/TiO2 antireflection coatings by liquid phase deposition ，THIN SOLID FILMS ,SCI<br>
                Dong-Sing Wuu(Dong-Sing Wuu)，Che-Chun Lin(Che-Chun Lin)，陳兆南(CHAO-NAN CHEN)，Hong-Hsiu Lee(Hong-Hsiu Lee)，Jung-Jie Hua(Jung-Jie Hua)<br>
                2015 Jun，584():248-252</td>
                　</tr>
            <tr style="background-color: #faf193">
                　<td style="padding: 5px 7px 5px 7px" align="center">4</td>
                　<td style="padding: 3px 2px 3px 6px">Effects of Excimer Laser Annealing on Low-Temperature Solution Based Indium-Zinc-Oxide Thin Film Transistor Fabrication ，Journal of Applied Research and Technology ,SCI<br>
                陳兆南(CHAO-NAN CHEN)，黃俊杰(Jung-Jie Huang)<br>
                2014 Sep，13(4):170-176</td>
                　</tr>
            <tr style="background-color: #f9c020">
                　<td style="padding: 5px 7px 5px 7px" align="center">5</td>
                　<td style="padding: 3px 2px 3px 6px">Characteristics of thin-film transistors based on silicon nitride passivation by excimer laser patterning ，THIN SOLID FILMS ,SCI<br>
                陳兆南(Chao-Nan Chen)，黃俊杰(Jung-Jie Huang)<br>
                2013 Feb，529():449-453</td>
                　</tr>
            <tr style="background-color: #faf193">
                　<td style="padding: 5px 7px 5px 7px" align="center">6</td>
                　<td style="padding: 3px 2px 3px 6px">Effect of Electrical and Mechanical Stresses of Low Temperature a-Si:H TFTs Fabricated on Polyimide and Glass Substrates ，THIN SOLID FILMS ,SCI<br>
                黃俊杰(Jung-Jie Huang)，陳兆南(Chao-Nan Chen)<br>
                2013 Feb，529():454-458</td>
                　</tr>
            <tr style="background-color: #f9c020">
                　<td style="padding: 5px 7px 5px 7px" align="center">7</td>
                　<td style="padding: 3px 2px 3px 6px">Taper angle of silicon nitride thin film control by laser direct pattern for transistors fabrication ，Applied Mechanics and Materials ,EI<br>
                陳兆南(Chao-Nan Chen)，Huang, Jung-Jie(Huang, Jung-Jie)，Wu, Gwo-Mei(Wu, Gwo-Mei)，Chien, How-Wen(Chien, How-Wen)<br>
                2013 Jan，284-287():225-229</td>
                　</tr>
            <tr style="background-color: #faf193">
                　<td style="padding: 5px 7px 5px 7px" align="center">8</td>
                　<td style="padding: 3px 2px 3px 6px">Size Effect of Silver Nanoparticle Melted into ZnO Nanorods for Photocatalytic Activity ，Applied Mechanics and Materials ,EI<br>
                Jung Jie Hu(Jung Jie Hu)，Ching Hsun Chao(Ching Hsun Chao)，陳兆南(Chao-Nan Chen)，Chun Fa Hsu(Chun Fa Hsu)，Ming Wei Tsai(Ming Wei Tsai)<br>
                2013 Jan，284-287():367-374</td>
                　</tr>
            <tr style="background-color: #f9c020">
                　<td style="padding: 5px 7px 5px 7px" align="center">9</td>
                　<td style="padding: 3px 2px 3px 6px">Photo-resist Protected Technology Application on Solution-based IZO TFT ，Advances in Information Sciences and Service Sciences ,EI<br>
                陳兆南(Chao-Nan Chen)，吳國梅(Gwo-Mei Wu)，蘇國輝(Kuo-Hui Su)，簡浩文(How-Wen Chien)，黃俊杰(Jung-Jie Huang)<br>
                2012 Nov，4(20):1-8</td>
                　</tr>
            <tr style="background-color: #faf193">
                　<td style="padding: 5px 7px 5px 7px" align="center">10</td>
                　<td style="padding: 3px 2px 3px 6px">Surface modification of polyimide alignment films by ion beams for liquid crystal displays ，SURFACE & COATINGS TECHNOLOGY ,SCI<br>
                H.W. Chien(H.W. Chien)，G.M. Wu(G.M. Wu)，C.W. Chiue(C.W. Chiue)，陳兆南(Chao-Nan Chen)<br>
                2011 Nov，206(5):797-800</td>
                　</tr>
            <tr style="background-color: #f9c020">
                　<td style="padding: 5px 7px 5px 7px" align="center">11</td>
                　<td style="padding: 3px 2px 3px 6px">Laser Direct Patterning of Organic Dielectric Passivation Layer for Fabricating Amorphous Silicon Thin-Film Transistors ，JAPANESE JOURNAL OF APPLIED PHYSICS ,SCI<br>
                陳兆南(Chao-Nan Chen)，蘇國輝(Kuo-Hui Su)，陳永欽(Chen Yeong-Chin)<br>
                2011 Jun，50(6):066501-066504</td>
                　</tr>
            <tr style="background-color: #faf193">
                　<td style="padding: 5px 7px 5px 7px" align="center">12</td>
                　<td style="padding: 3px 2px 3px 6px">Improved liquid crystal pretilt angles by patterned dual alignment coating structures ，JOURNAL OF NANOSCIENCE AND NANOTECHNOLOGY ,SCI<br>
                Wu GM(Wu GM)，Chien HW(Chien HW)，陳兆南(Chao-Nan Chen)，Lin CY(Lin CY)，Huang JA(Huang JA)，Zeng HL(Zeng HL)<br>
                2010 Jul，10(7):4592-4595</td>
                　</tr>
            <tr style="background-color: #f9c020">
                　<td style="padding: 5px 7px 5px 7px" align="center">13</td>
                　<td style="padding: 3px 2px 3px 6px">Improved AMOLED with aligned poly-Si thinfilm transistors by laser annealing and chemical solution treatments ，Physica B: Condensed Matter ,EI<br>
                G.M. Wu(G.M. Wu)，陳兆南(Chao-Nan Chen)，W.S. Feng(W.S. Feng)，H.C. Lu(H.C. Lu)<br>
                2009 ，404(23-24):4649-4652</td>
                　</tr>
        </table>

    </div>

</div >

<footer class="footer container-fluid text-center" >
    <p > Powered by Shengjie </p >
</footer >
</body>
</html>';
?>