<?php
    $template = 1;
    $user_name = '';
    $password = '';
    $confirm_password = '';
    $name = '';
    $email = '';
    $mobile_number = '';
    $gender = '';
    $question = '';
    $answer = '';
    $errors = array();
    if(isset($_POST['submit']))
    {
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        $name = $_POST['name'];
        $name=strtoupper($name);
        $email = $_POST['email'];
        $mobile_number = $_POST['mobile_number'];
        $gender = $_POST['gender'];
        $question = $_POST['question'];
        $answer = $_POST['answer'];
        
        if(empty($user_name))
        {
            $errors['user_name']= '*Username is Required';
        }
        if(empty($password))
        {
            $errors['password']= '*Password is Required';
        }
        if(empty($name))
        {
            $errors['name']= '*Name is Required';
        }
        if(empty($email))
        {
            $errors['email']= '*Email is Required';
        }
        if(empty($mobile_number))
        {
            $errors['mobile_number']= '*Mobile Number is Required';
        }
        if(empty($question))
        {
            $errors['question']= '*Question is Required';
        }
        if(empty($answer))
        {
            $errors['answer']= '*Answer is Required';
        }
        
        
        if(count($errors)==0){
            if(!preg_match('/^[A-Za-z][A-Za-z0-9]*$/', $user_name)){
                $errors['user_name'] = '*User Name is not Valid';
            }
            if(strlen($password) < 6){
                $errors['password'] = '*Password must be at least 6 characters';
            }
            if(!preg_match('/^[0-9]*$/', $mobile_number)){
                $errors['mobile_number'] = '*Mobile No. is Not Valid';
            }
            if(strlen($mobile_number) < 10){
                $errors['mobile_number'] = '*Mobile No. is Not Valid';
            }
            if($password != $confirm_password){
                $errors['confirm_password'] = '*Passwords do not match';
            }
            if(!preg_match('/^[A-Za-z0-9]+@[A-Za-z0-9]+\.[A-Za-z]+$/', $email)){
                $errors['email'] = '*Email is not Valid';
            }
        }
        
        if(count($errors)==0)
        {
            $query = "select * from users where user_name='$user_name'"; 
            require_once 'includes/db.inc.php';
            $result = mysql_query($query);
            if(mysql_num_rows($result)==1)
            {
                $errors['user_name'] = '*User Name Already Exists';
            }
        }
        if(count($errors)==0)
        {
            $str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            $str = str_shuffle($str);
            $verification_code = substr($str, 0,20);
            $password = sha1($password);
            $answer = sha1($answer);
            $query = "insert into users values('$user_name','$password','member','$name','$email','$mobile_number','$gender','$question','$answer','$verification_code','N','avatar.png')";
            require_once 'includes/db.inc.php';
            mysql_query($query);
            $template = 2;
            $message =   '<p>Registration Successful</p>'.'<p>Verification Link <a href="http://vishalworld.16mb.com/verify.php?user_name='.$user_name.'&code='.$verification_code.'">Click here to verify</a></p>';
            $subject =  'Complete Your Verification'; 
            /*require_once('./includes/class.phpmailer.php');

            $mailer = new PHPMailer(true);

            $mailer->Sender = 'vk9897851898@gmail.com';
            $mailer->SetFrom('vk9897851898@gmail.com', 'ONLINE QUIZZ');
            $mailer->AddAddress($email);
            $mailer->Subject = 'Registration';
            $mailer->MsgHTML('<p>Registration Successful</p>'.
                    '<p>Verification Link <a href="http://vishalworld.16mb.com/verify.php?user_name='.$user_name.'&code='.$verification_code.'">Click here to verify</a></p>');

            // Set up our connection information.
            $mailer->IsSMTP();
            $mailer->SMTPAuth = true;
            $mailer->SMTPSecure = 'ssl';
            $mailer->Port = 465;
            $mailer->Host = 'smtp.gmail.com';
            $mailer->Username = 'vk9897851898@gmail.com';
            $mailer->Password = 'xyz123';

            $mailer->Send();*/           
            mail($email, $subject, $message);
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
            <?php if($template==1){ ?>
            <h2 style="text-align: center;font-family: Constantia,sans-serif;">REGISTRATION:</h2>
            <div class="w3-card-8" id="loginbox2">
                
                <form action="register.php" method="POST">
                        <div>
                            <label for="name"><strong style="font-family: Constantia,serif;">NAME:</strong></label><br>
                            <input type="text" placeholder="NAME"  class="form-control pad" value="<?php echo $name; ?>" id="name" name="name">
                            <?php if(isset($errors['name'])) { ?> 
                                    <span class="error"><?php echo $errors['name']; ?></span>
                                <?php } ?>
                        </div>
                        <div>
                            <label for="usr"><strong style="font-family: Constantia,serif;">USERNAME:</strong></label><br>
                            <input type="text" placeholder="USERNAME"  class="form-control pad" value="<?php echo $user_name; ?>" id="usr" name="user_name">
                            <?php if(isset($errors['user_name'])) { ?> 
                                    <span class="error"><?php echo $errors['user_name']; ?></span>
                                <?php } ?>
                        </div>
                        <div>
                            <label for="pwd"><strong style="font-family: Constantia,serif;">PASSWORD:</strong></label><br>
                            <input type="password" placeholder="PASSWORD"  class="form-control pad" id="pwd" name="password">
                            <?php if(isset($errors['password'])) { ?> 
                                    <span class="error"><?php echo $errors['password']; ?></span>
                                <?php } ?>
                        </div>
                        <div>
                            <label for="cpwd"><strong style="font-family: Constantia,serif;">CONFIRM PASSWORD:</strong></label><br>
                            <input type="password" placeholder="CONFIRM PASSWORD"  class="form-control pad" id="cpwd" name="confirm_password">
                            <?php if(isset($errors['confirm_password'])) { ?> 
                                    <span class="error"><?php echo $errors['confirm_password']; ?></span>
                                <?php } ?>
                        </div>
                        <div>
                            <label for="email"><strong style="font-family: Constantia,serif;">EMAIL:</strong></label><br>
                            <input type="text" placeholder="EMAIL"  class="form-control pad" value="<?php echo $email; ?>" id="email" name="email">
                            <?php if(isset($errors['email'])) { ?> 
                                    <span class="error"><?php echo $errors['email']; ?></span>
                                <?php } ?>
                        </div>
                        <div>
                            <label for="mob"><strong style="font-family: Constantia,serif;">MOBILE NO. :</strong></label><br>
                            <input type="text" placeholder="MOBILE NUMBER"  class="form-control pad" value="<?php echo $mobile_number; ?>" id="mob" name="mobile_number">
                            <?php if(isset($errors['mobile_number'])) { ?> 
                                    <span class="error"><?php echo $errors['mobile_number']; ?></span>
                                <?php } ?>
                        </div>
                    <div> 
                        <label for="gen"><strong style="font-family: Constantia,serif;">GENDER:</strong></label><br>
                        <input class="w3-radio" type="radio" name="gender" value="Male" checked id="gen">
                        <label class="w3-validate">Male</label>
                        &nbsp;
                        <input class="w3-radio" type="radio" name="gender" value="Female" id="gen">
                        <label class="w3-validate">Female</label>
                    </div><br>
                        <div>
                            <label for="ques"><strong style="font-family: Constantia,serif;">SECURITY QUESTION:</strong></label><br>
                            <input type="text" placeholder="QUESTION"  class="form-control pad" value="<?php echo $question; ?>" id="ques" name="question">
                            <?php if(isset($errors['question'])) { ?> 
                                    <span class="error"><?php echo $errors['question']; ?></span>
                                <?php } ?>
                        </div>
                        <div>
                            <label for="ans"><strong style="font-family: Constantia,serif;">SECURITY ANSWER:</strong></label><br>
                            <input type="text" placeholder="ANSWER"  class="form-control pad" value="<?php echo $answer; ?>" id="ans" name="answer">
                            <?php if(isset($errors['answer'])) { ?> 
                                    <span class="error"><?php echo $errors['answer']; ?></span>
                                <?php } ?>
                        </div>
                        <br>
                        <button class="button button2" id="register" name="submit" type="submit">REGISTER</button>
                        <button class="button button2" type="reset">RESET</button>
                </form>
                <?php } ?>
            <?php if($template==2){ ?>
            <h2>Congratulations!</h2>
            <h3>Your registration is almost complete</h3>
            <h3>An email has been sent to your email id <strong><?php echo $email;?></strong></h3>
            <h3>Please click the verification link given in your email id.</h3>
            <h3>Thank You..!</h3>
            Click <a href="login.php">here</a> to login.
            <?php } ?>
            </div>  
        </div>


        <div class="w3-small w3-teal w3-padding w3-margin-bottom" style="text-align: center;font-family: cursive;">
            <?php require_once './includes/footer.inc.php'; ?>
        </div>
    </body>
</html>
