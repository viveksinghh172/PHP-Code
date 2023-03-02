<?php
$status = 0;
$user_name = '';
if (isset($_POST['submit'])) {
    $user_name = $_REQUEST['user_name'];
    $password = $_REQUEST['password'];
    $password = sha1($password);
    $query = "select * from users where user_name='$user_name' and password='$password'";
    require_once './includes/db.inc.php';
    $result = mysql_query($query);
    if (mysql_num_rows($result) == 1) {
        $row = mysql_fetch_assoc($result);
        if ($row['verified'] == 'Y') {
            session_start();
            $name = $row['name'];
            $role_name = $row['role_name'];
            $user_name = $row['user_name'];
            $_SESSION['name'] = $name;
            $_SESSION['role_name'] = $role_name;
            $_SESSION['user_name'] = $user_name;
            if ($role_name == 'admin') {
                header('location:./admin/index.php');
            } elseif ($role_name == 'member') {
                header('location:./member/index.php');
            }
        } else {
            $status = 1;
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
        
        <link href="css/w3.css" rel="stylesheet" type="text/css"/>
        
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        
        <link href="css/btn.css" rel="stylesheet" type="text/css"/>
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <div class="w3-container" style="padding:0.01em 0px;border-radius: 5px;">
            <?php require_once './includes/header.inc.php'; ?>
        </div>

        <div id="content">
            <a href="index.php" style="float: right;"><button class="w3-btn w3-round-large w3-ripple w3-red">HOME</button></a>
            <h2 style="text-align: center;font-family: Constantia,sans-serif;">LOGIN:</h2>
            <div class="w3-card-8" id="loginbox1">

                <form action="login.php" method="POST">
                    <div>
                        <label for="usr"><strong style="font-family: Constantia,serif;">USERNAME:</strong></label><br>
                        <input type="text" placeholder="USERNAME" required class="form-control" id="usr" name="user_name">
                    </div>
                    <div>
                        <label for="pwd"><strong style="font-family: Constantia,serif;">PASSWORD:</strong></label><br>
                        <input type="password" placeholder="PASSWORD" required class="form-control" id="pwd" name="password">
                    </div><br>
                    <button class="button button2" name="submit" type="submit">LOGIN</button>
                    <button class="button button2" type="reset">RESET</button>

                    <div>
                        <br> <a style="font-size: 1.1em; color: darkblue;text-decoration: none;" href="forgot_password.php" title="Forgot Password">Forgot Password?</a>
                    </div>
                    <div>
                        <br> <a style="font-size: 1.1em; color: darkblue;text-decoration: none;" href="register.php" title="Create Account">Create Account</a>
                    </div>
                </form>
                <div id="status">
                    <?php if ($status == 1) { ?>
                        <p>You Have Not Verified Your Email..</p>
                    <?php } elseif ($status == 2) { ?>
                        <p>Wrong Username And Password..</p>
                    <?php } ?>
                </div>
            </div>  
        </div>


        <div class="w3-small w3-teal w3-padding w3-margin-bottom" style="text-align: center;font-family: cursive;">
            <?php require_once './includes/footer.inc.php'; ?>
        </div>
    </body>
</html>