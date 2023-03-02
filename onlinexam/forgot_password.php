<?php
    $status = 0;
    $template = 1;
    if(isset($_POST['submit']))
    {
        $user_name =$_POST['user_name'];
        $query = "select * from users where user_name = '$user_name'";
        require_once 'includes/db.inc.php';
        $result = mysql_query($query);
        if (mysql_num_rows($result)==1) {
            $template = 2;
            $query = "select * from users where user_name='$user_name'";
            $result = mysql_query($query);
            $row = mysql_fetch_assoc($result);
            $question = $row['question'];
        }
        else {
        $status = 1;
        $template = 1;
        }
    }
    if(isset($_POST['reset']))
    {
        $user_name = $_POST['user_name'];
        $question = $_POST['question'];
        $answer = $_POST['answer'];
        $answers = sha1($answer);
        $query = "select * from users where user_name = '$user_name' and answer = '$answers'";
        require_once 'includes/db.inc.php';
        $result = mysql_query($query);
        if(mysql_num_rows($result)==1)
        {
            $template = 3;
            $str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            $str = str_shuffle($str);
            $password = substr($str, 0,8);
            $data = sha1($password);
            $query = "update users set password = '$data' where user_name = '$user_name'";
            mysql_query($query);
            $query = "select * from users where user_name = '$user_name'";
            $result = mysql_query($query);
            $row = mysql_fetch_assoc($result);
            $email = $row['email'];
            $message = '<p>Your Password is : '.$password.'</p>';
            $subject = 'Changed Password' ;
            /*require_once('includes/class.phpmailer.php');

                $mailer = new PHPMailer(true);

                $mailer->Sender = 'vk9897851898@gmail.com';
                $mailer->SetFrom('vk9897851898@gmail.com', 'Vishal Technologies');
                $mailer->AddAddress($email);
                $mailer->Subject = 'Password Reset';
                $mailer->MsgHTML('<p>Your Password is : '.$password.'</p>');
                
                $mailer->IsSMTP();
                $mailer->SMTPAuth= TRUE;
                $mailer->SMTPSecure= 'ssl';
                $mailer->port = 465;
                $mailer->Host = 'smtp.gmail.com';
                $mailer->Username ='vk9897851898@gmail.com';
                $mailer->Password ='xyz123';
                        
                $mailer->Send();*/
                mail($email, $subject, $message);
            }
            else {
                $status =2;
                $template =2;
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>.::ONLINE QUIZZ::.</title>
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/w3.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/btn.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <div class="w3-container" style="padding:0.01em 0px;border-radius: 5px;">
            <?php require_once './includes/header.inc.php'; ?>
        </div>


        <div id="content">
            <a href="index.php" style="float: right;"><button class="w3-btn w3-round-large w3-ripple w3-red">HOME</button></a>
            <?php if($template==1) { ?>
            <h2>Forgot Password</h2>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div>
                        <label for="usr"><strong style="font-family: Constantia,serif;">USERNAME:</strong></label><br>
                        <input type="text" placeholder="USERNAME" required class="form-control" id="usr" name="user_name">
                    </div>
                    <button class="button button2" name="submit" type="submit">SUBMIT</button> 
            </form>
            <?php if($status==1) { ?>
            <h2>UserName is Incorrect.</h2>
            <?php } ?>
            <?php } ?>
            
            <?php if($template==2) { ?>
            <h2>Forgot Password</h2>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div>
                        <label for="usr"><strong style="font-family: Constantia,serif;">USERNAME:</strong></label><br>
                        <input type="text" readonly="" class="form-control" id="usr" name="user_name" value="<?php echo "$user_name"; ?>">
                    </div>
                <div>
                        <label for="ques"><strong style="font-family: Constantia,serif;">Question:</strong></label><br>
                        <input type="text" readonly="" class="form-control" id="ques" name="question" value="<?php echo "$question"; ?>">
                    </div>
                <div>
                        <label for="ans"><strong style="font-family: Constantia,serif;">Answer:</strong></label><br>
                        <input type="text" placeholder="Enter Answer" required class="form-control" id="ans" name="answer">
                    </div>
                    <button class="button button2" name="reset" type="submit">SUBMIT</button> 
            </form>
            <?php if($status==2) { ?>
            <h2>Answer is Incorrect.</h2>
            <?php } ?>
            <?php } ?>
            <?php if($template==3) { ?>
            <h3>Your password has been changed.</h3>
            <h3>An email has been sent to your mail id.</h3>
            Click <a href="login.php">here</a> to login.
            <?php echo $message; } ?>
            
        </div>

        
        <div class="w3-small w3-teal w3-padding w3-margin-bottom" style="text-align: center;font-family: cursive;">
            <?php require_once './includes/footer.inc.php'; ?>
        </div>
    </body>
</html>
