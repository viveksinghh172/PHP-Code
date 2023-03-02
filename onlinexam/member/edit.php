<?php
    $template = 1;
    $name = '';
    $email = '';
    $mobile_number = '';
    $question = '';
    $answer = '';
    $errors = array();
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile_number = $_POST['mobile_number'];
        $question = $_POST['question'];
        $answer = $_POST['answer'];
        
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
            <?php require_once '../includes/header.inc.php'; ?>
        </div>


        <div id="content">
            <a href="index.php" style="float: right;"><button class="w3-btn w3-round-large w3-ripple w3-red">HOME</button></a>
            <?php if($template==1){ ?>
            <h2 style="text-align: center;font-family: Constantia,sans-serif;">EDIT:</h2>
            <div class="w3-card-8 loginbox1">
                
                <form action="edit.php" method="POST">
                        <div>
                            <label for="name"><strong style="font-family: Constantia,serif;">NAME:</strong></label><br>
                            <input type="text" placeholder="NAME"  class="form-control pad" value="<?php echo $name; ?>" id="name" name="name">
                            <?php if(isset($errors['name'])) { ?> 
                                    <span class="error"><?php echo $errors['name']; ?></span>
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
                        <button class="button button2" id="register" name="submit" type="submit">UPDATE</button>
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
            <?php require_once '../includes/footer.inc.php'; ?>
        </div>
    </body>
</html>
