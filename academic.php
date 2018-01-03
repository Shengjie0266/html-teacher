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
    <title>學術</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data - toggle="collapse" data - target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"> 陳兆南</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">';
if (isset($_SESSION['username'])) {
    echo '<li ><a href = "logout.php" > 登出</a ></li >
<li ><a href = "#" > 控制台</a ></li >';
}
echo '<li ><a href = "index.php" > 首頁</a ></li >
                <li ><a href="resume.php"> 簡歷</a></li>
                <li class="active"><a href="academic.php"> 學術</a></li>
                <li ><a href="book.php"> 著作</a></li>
                <li ><a href="link.php"> 常用連結</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid text-center">
    <div class="row">
        <div class="col-sm-3" style="background-color:white;"></div>
        <div class="col-sm-6" style="background-color:white;"></div>
        <div class="col-sm-3" style="background-color:white;"></div>
    </div>
    
    新加坡南洋理工大學張善勇教授到亞大演講！
        
    南洋理工大學教授張善勇到資工系演講，並拜訪亞大半導體產研專班，雙方學術交流、討論合作事宜。</p>
                            <p style="margin:10px 0px;padding:0px"></p>
                            <table align="left" border="0" cellpadding="0" cellspacing="0" width="139">
                                <tbody>
                                <tr>
                                    <td align="left" style="margin:0px;padding:0px" valign="top"><p
                                            style="margin:5px 10px;padding:0px;word-spacing:1px"><a
                                            href="http://web.asia.edu.tw/ezfiles/0/1000/img/169/1413185431.jpg"
                                            style="color:rgb(30,19,249)" target="_blank"
                                            title="新加坡南洋理工大學張善勇教授(左)參觀亞洲大學半導體實驗室，與半導體產研專班負責人許健教授研究交流。"
                                            rel="nofollow"><img alt="新加坡南洋理工大學張善勇教授(左)參觀亞洲大學半導體實驗室，與半導體產研專班負責人許健教授研究交流。"
                                                                border="0" height="150" hspace="0"
                                                                src="http://web.asia.edu.tw/ezfiles/0/1000/img/169/1413185431.jpg"
                                                                style="border-width:initial;border-style:none;padding-right:5px;padding-bottom:5px"
                                                                vspace="6" width="200"/></a></p>
                                        <p style="margin:5px 10px;padding:0px;word-spacing:1px"><font color="#446666"
                                                                                                      face="微軟正黑體"
                                                                                                      style="font-size:9pt">圖說：
                                            新加坡南洋理工大學張善勇教授(左)參觀亞洲大學半導體實驗室，與半導體產研專班負責人許健教授研究交流。</font></p></td>
                                </tr>
                                </tbody>
                            </table>
                            <p align="left" style="margin:10px 0px;padding:0px;text-indent:13px;text-align:justify">
    新加坡南洋理工大學教授張善勇博士(Dr. Sam Zhang)，10月6日應邀到亞洲大學（Asia University, Taiwan）演講，他以「My Will，My
                                Way」為主題勉勵資工系師生說，期望（expectation）、意念的力量（will
                                power）、目標（target）、堅持（persistence）、智商情商及媽寶弊病（IQ&amp;EQ and “only—child
                                syndrome）、執行意識（walk it），都是影響人生成功與否的重要因素。</p>
                            <p style="margin:10px 0px;padding:0px"></p>
                            <p align="left" style="margin:10px 0px;padding:0px;text-indent:13px;text-align:justify">
    張善勇教授強調，人生不可能一帆風順，一定會遇到失敗與挫折，如何調整腳步與做好情緒管理，繼續努力往目標前進是邁向成功的要務。他同時還結合自己的人生經歷，向同學們講解了自己如何在艱困的環境中堅持目標，自立向學等待機會的來臨，同時也講解學習技巧和面對考試之間關聯性與重要性。</p>
                            <p style="margin:10px 0px;padding:0px"></p>
                            <p align="left" style="margin:10px 0px;padding:0px;text-indent:13px;text-align:justify">
    張善勇教授隨後參觀亞洲大學半導體產研專班，與產研專班負責人許健教授進行學術交流，許健教授強調，亞大半導體產學專班是國內大學中很獨特的學術團隊，亞大半導體實驗室研發「非摩爾定律」產品技術即類比、功率、高壓的元件物理及創意設計，先後受到台積電、世界先進、新唐科技等電子大廠獎助委託研發及產學合作，目前已與美國、馬來西亞、中國大陸等國際知名學術及研發機構合作，為台灣及亞洲的奈米技術發展與應用領先的實驗室，將來有機會將與張教授合作開發先進奈米製造技術。</p>
                            <p style="margin:10px 0px;padding:0px"></p>
                            <table align="right" border="0" cellpadding="0" cellspacing="0" width="139">
                                <tbody>
                                <tr>
                                    <td align="left" style="margin:0px;padding:0px" valign="top"><p
                                            style="margin:5px 10px;padding:0px;word-spacing:1px"><a
                                            href="http://web.asia.edu.tw/ezfiles/0/1000/img/169/1413185459.jpg"
                                            style="color:rgb(250,241,147)" target="_blank"
                                            title="新加坡南洋理工大學張善勇教授(右二)受邀擔任資工系系所發展及課程規劃諮詢暨審查委員。" rel="nofollow"><img
                                            alt="新加坡南洋理工大學張善勇教授(右二)受邀擔任資工系系所發展及課程規劃諮詢暨審查委員。" border="0" height="150"
                                            hspace="0"
                                            src="http://web.asia.edu.tw/ezfiles/0/1000/img/169/1413185459.jpg"
                                            style="border-width:initial;border-style:none;padding-right:5px;padding-bottom:5px"
                                            vspace="6" width="200"/></a></p>
                                        <p style="margin:5px 10px;padding:0px;word-spacing:1px"><font color="#446666"
                                                                                                      face="微軟正黑體"
                                                                                                      style="font-size:9pt">圖說：新加坡南洋理工大學張善勇教授(右二)受邀擔任資工系系所發展及課程規劃諮詢暨審查委員。</font>
                                        </p></td>
                                </tr>
                                </tbody>
                            </table>
                            <p align="left" style="margin:10px 0px;padding:0px;text-indent:13px;text-align:justify">
    張善勇教授此次蒞校演講，同時也受邀擔任資工系系所發展及課程規劃諮詢暨審查委員，針對系所發展方向及課程規畫提出寶貴的建議。</p>
                            <p style="margin:10px 0px;padding:0px"></p>
                            <p align="left" style="margin:10px 0px;padding:0px;text-indent:13px;text-align:justify">
    亞大資工系主任時文中說，張善勇教授為國際知名的學者，目前為新加坡南洋理工大學機械及航空工程學院終身教授，薄膜學會創始人和現任會長。現任美國材料學會《材料研究雜誌》主編，《奈米科技通訊》雜誌總編。中國中科院固體物理研究所名譽教授，浙江大學、哈爾濱工業大學客座教授，於2007年獲頒英國材料學會會士，現任先進金屬材料塗鍍國家工程實驗室首席科學家，具有豐富學術研究經歷，透過此次的演講與師生互動交流及系務發展的諮詢及課程審查，有助提升學生及教師國際視野，進而提升國際競爭力。</p>
                            <p style="margin:10px 0px;padding:0px"></p>
                            <table align="center" border="0" cellpadding="0" cellspacing="0" width="139">
                                <tbody>
                                <tr>
                                    <td align="left" style="margin:0px;padding:0px" valign="top"><p
                                            style="margin:5px 10px;padding:0px;word-spacing:1px"><a
                                            href="http://web.asia.edu.tw/ezfiles/0/1000/img/169/1413185490.jpg"
                                            style="color:rgb(64,64,64)" target="_blank"
                                            title="新加坡南洋理工大學張善勇教授(左)參觀亞大半導體實驗室，與半導體產研專班負責人許健教授(中)等人合影。"
                                            rel="nofollow"><img
                                            alt="新加坡南洋理工大學張善勇教授(左)參觀亞大半導體實驗室，與半導體產研專班負責人許健教授(中)等人合影。" border="0"
                                            height="300" hspace="0"
                                            src="http://web.asia.edu.tw/ezfiles/0/1000/img/169/1413185490.jpg"
                                            style="border-width:initial;border-style:none;padding-right:5px;padding-bottom:5px"
                                            vspace="6" width="400"/></a></p>
                                        <p style="margin:5px 10px;padding:0px;word-spacing:1px"><font color="#446666"
                                                                                                      face="微軟正黑體"
                                                                                                      style="font-size:9pt">圖說：
                                            新加坡南洋理工大學張善勇教授(左)參觀亞大半導體實驗室，與半導體產研專班負責人許健教授(中)等人合影。</font></p></td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </font></div>
        </div>
    </div>
</div>
<div dir="ltr"><br/></div>
</div></td></tr></tbody></table>
</div>

</div >

<footer class="footer container-fluid text-center">
    <p> Powered by Shengjie </p>
</footer>
</body>
</html>';
 ?>