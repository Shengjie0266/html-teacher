<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/29
 * Time: 上午 10:58
 */
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body  background="img/bg1.jpg">
<form name="form" method="post" action="register_finish.php">
    帳號：<input type="text" name="id"/> <br>
    密碼：<input type="password" name="pw"/> <br>
    再一次輸入密碼：<input type="password" name="pw2"/> <br>
    信箱：<input type="text" name="email"/> <br>
    電話：<input type="text" name="phone"/> <br>
    備註：<textarea name="type" cols="45" rows="5"></textarea> <br>
    <input type="submit" name="button" value="確定"/>
</form>
</body>