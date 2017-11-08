<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/8
 * Time: 上午 10:16
 */
$r=$_POST['r'];
$g=$_POST['g'];
$b=$_POST['b'];

$m=$_POST['m'];
$n=$_POST['n'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ex</title>
</head>
<body>
<table border="1">
<?php
echo"<body style=background-color: rgb($r,$g,$b)>";
for($i=1;$i<=$n;$i++){
    echo "<tr>";
    for($j=1;$j<=$m;$j++){
        echo "<td style='font-size: 2em'>" . $i*$j . "  ";
    }echo "<br/>";
}

?>
</body>
</html>