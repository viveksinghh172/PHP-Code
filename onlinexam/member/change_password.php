<?php
require_once '../includes/member/secure.inc.php';
$status = 0;
$template = 1;
if(isset($_POST['submit'])) 
    {
    $current_password = $_POST['current_password'];
    $current_password = sha1($current_password);
    $new_password = $_POST['new_password'];
    $new_password = sha1($new_password);
    $confirm_password = $_POST['confirm_password'];
    $confirm_password = sha1($confirm_password);
    require_once '../includes/db.inc.php';
    $user_name = $_SESSION['user_name'];
    $query = "select * from users where user_name = '$user_name' and password = '$current_password'";
    $result = mysql_query($query);
    if(mysql_num_rows($result) == 1) 
        {
        if ($new_password != $confirm_password) {
            $status = 1;
        } else {
            $query = "update users set password = '$new_password' where user_name = '$user_name'";
            mysql_query($query);
            $template = 2;
        }
    } else {
        $status = 2;
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>.::ONLINE QUIZZ::.</title>
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../css/w3.css" rel="stylesheet" type="text/css"/>
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
        <link href="../css/btn.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <div class="w3-container" style="padding:0.01em 0px;border-radius: 5px;">
<?php require_once '../includes/member/header.inc.php'; ?>
        </div>
        <?php require_once '../includes/member/card.inc.php'; ?>
        <div id="content" style="margin-left:250px;">
<?php require_once('../includes/member/menu.inc.php'); ?>
            <form action="change_password.php" method="POST">
                <div class="w3-card-4" style="padding:20px; background-color: white;">

                    <div class=" w3-blue" style="padding:05px;">
                        <h2>Change Password </h2>
                    </div>
                    <label>Current Password:</label>
                    <input required class="w3-input" type="password" name="current_password">     
                    <label>New Password:</label>
                    <input required class="w3-input" type="password" name="new_password">
                    <label>Confirm Password:</label>
                    <input required class="w3-input" type="password" name="confirm_password"> <br>
                    <button class="w3-btn w3-green w3-hover-aqua" type="submit" name="submit">Change Password</button>
                </div>
            </form>
                <?php if ($status == 1) { ?>
                <h2 class="error">Passwords Does Not Match..!</h2> 
                <?php } elseif ($status == 2) { ?>
                <h2 class="error">Wrong Current Password.</h2>
                <?php } ?>
                <?php if ($template == 2) { ?>
                <h2>Password Changed Successfully.</h2>
                <?php } ?>
        </div>
        <div class="w3-small w3-teal w3-padding w3-margin-bottom" style="text-align: center;font-family: cursive;">
            <?php require_once '../includes/member/footer.inc.php'; ?>
        </div>
    </body>
</html>
