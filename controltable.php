<?php
include("mysql_connect.inc.php");
session_start();
$id = $_SESSION['id'];
?>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"
          integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"
            integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4"
            crossorigin="anonymous"></script>
</head>
<body  style="background: url(img/christmas-colour.png)">
<?php
if ($_SESSION['id'] != null) {
echo '
<nav class="navbar navbar-inverse">
    <div id="accordion" role="tablist" >
        <div class="card">
            <div class="card-header" role="tab" id="headingOne"  style="background:url(img/memphis-colorful.png)">
                <h5 class="mb-0">
                    <a data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="false"
                       aria-controls="collapseOne">
                        著作
                    </a>
                </h5>
            </div>
    
            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne"
                 data-parent="#accordion">
                <div class="card-body" style="background:url(img/intersection.png)"><table style="width:100%" border="0">'; ?>
        <?php
        $dataName = "book";
        $sql = "SELECT * FROM `$dataName`";
        $result = mysqli_query($link, $sql);
        while ($row = @mysqli_fetch_row($result)) {
            echo '<tr>';
            echo "<td><form action='modify.php' method='post'><input name='dataName' type='hidden' value='$dataName'><input name='dataId' type='hidden' value='$row[0]'><textarea rows=\"3\" cols=\"150\" name=\"content\">";
            echo "$row[1]";
            echo "</textarea></td><td><input type='submit' value='submit'></form></td>";
            echo "<form action=\"delete_all.php\" method=\"post\"><td>
                            <input name='dataId' type='hidden' value='$row[0]'>
                            <input type=\"hidden\" name=\"dataName\" value=\"$dataName\">
                            <input type=\"submit\" value=\"delete\">
                            </td></form>";
            echo "</tr>";
        }
        ?>
        <tr>
            <form action="register_all.php" method="post">
                <td><textarea rows="3" cols="150" name="content"></textarea></td>
                <td></td>
                <td align="center">
                    <input type="hidden" name="dataName" value="<?php echo $dataName; ?>">
                    <input type="submit" value="add">
                </td>
            </form>
        </tr>
        </table>
        <?php
        echo '   
                </div>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header" role="tab" id="headingTwo" style="background:url(img/memphis-colorful.png)">
                <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false"
                       aria-controls="collapseTwo">
                        獲獎
                    </a>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body" style="background:url(img/intersection.png)"><table style="width:100%" border="0">';?>
                    <?php
                    $dataName = "award";
                    $sql = "SELECT * FROM `$dataName`";
                    $result = mysqli_query($link, $sql);
                    while ($row = @mysqli_fetch_row($result)) {
                        echo '<tr>';
                        echo "<td><form action='modify.php' method='post'><input name='dataName' type='hidden' value='$dataName'><input name='dataId' type='hidden' value='$row[0]'><textarea rows=\"3\" cols=\"150\" name=\"content\">";
                        echo "$row[1]";
                        echo "</textarea></td><td><input type='submit' value='submit'></form></td>";
                        echo "<form action='delete_all.php' method='post'><td>
                                                    <input name='dataId' type='hidden' value='$row[0]'>
                                                    <input type='hidden' name='dataName' value='$dataName'>
                                                    <input type='submit' value='delete'>
                                                    </td></form>";
                        echo "</tr>";
                    }
                    ?>
                    <tr>
                        <form action="register_all.php" method="post">
                            <td><textarea rows="3" cols="150" name="content"></textarea></td>
                            <td></td>
                            <td align="center">
                                <input type="hidden" name="dataName" value="<?php echo $dataName; ?>">
                                <input type="submit" value="add">
                            </td>
                        </form>
                    </tr>
        <?php
        echo '    </div>
            </div>
        </div>
    </div>
</nav>
';
}
?>
</body>
</html>