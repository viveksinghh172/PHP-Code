<?php
$user_name = $_REQUEST['user_name'];
$code = $_REQUEST['code'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>.::ONLINE QUIZZ::.</title>
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/w3.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <div class="w3-container" style="padding:0.01em 0px;border-radius: 5px;">
<?php require_once './includes/header.inc.php'; ?>
        </div>


        <div id="content">
            <?php
            $query = "select * from users where user_name='$user_name'";
            require_once './includes/db.inc.php';
            $result = mysql_query($query);
            if (mysql_num_rows($result) == 1) {
            $row = mysql_fetch_assoc($result);
            $verification_code = $row['verification_code'];
            }
            ?>
<?php
if ($verification_code == $code) {
    $query = "UPDATE users SET verified='Y' WHERE user_name = '$user_name'";
    mysql_query($query);
}
?>
            <h2>Your Email Has Been Verified Successfully.</h2>
            <h2>your username is <?php echo "$user_name"; ?></h2>
            <a href="login.php">Click Here</a>To Login.
        </div>


        <div class="w3-small w3-teal w3-padding w3-margin-bottom" style="text-align: center;font-family: cursive;">
            <?php require_once './includes/footer.inc.php'; ?>
        </div>
    </body>
</html>
