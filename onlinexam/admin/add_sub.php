<?php
require_once '../includes/admin/secure.inc.php'; 
    $status = 0;
    
    $errors = array();
    if(isset($_POST['submit']))
        {
        $subject = $_POST['subject'];
        $sub = $subject;
        $subject = strtoupper($sub);
        $_SESSION['subject'] = $subject;
        if(strlen($subject) > 9){
                $errors['subject'] = '*Subject Name must be at most 9 characters';
            }
        if(count($errors)==0)
        
    {
        
        $query = "CREATE TABLE $subject
    (
    sno int(255) NOT NULL,
    question varchar(255),
    a varchar(255),
    b varchar(255),
    c varchar(255),
    d varchar(255),
    correct_answer varchar(255),
    given_answer varchar(255),
    PRIMARY KEY (sno)
    )";
            
        require_once '../includes/db2.inc.php';
        mysql_query($query);
        
        $status = 1;
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
    </head>
    <body>

        <div class="w3-container" style="padding:0.01em 0px;border-radius: 5px;">
            <?php require_once '../includes/header.inc.php'; ?>
        </div>
        <?php require_once '../includes/admin/card.inc.php'; ?>

        <div id="content" style="margin-left: 250px;">
            <?php require_once('../includes/admin/menu.inc.php'); ?>
            <hr style="border: 5px solid red;">
            <form action="add_sub.php" method="POST">
                <table border="0" cellpadding="10" style="text-align: center;">
                    <tbody>
                        <tr>
                            <td>
                                <label class="w3-text-blue"><b>Subject Name :</b></label>
                                <input class="w3-input w3-border" required name="subject" type="text">  
                            </td>
                            <?php if(isset($errors['subject'])) { ?> 
                                    <span class="error"><?php echo $errors['subject']; ?></span>
                                <?php } ?>
                        </tr>
                        <tr>
                            <td><button class="w3-btn w3-green w3-hover-aqua" type="submit" name="submit">Add Subject</button></td>
                        </tr>
                    </tbody>
                </table>
            </form>
            <?php
            if ($status==1) {
                echo 'Successfully Added';
            }elseif($status==0){
                echo '*You Can Add any Subject<br>';
                echo '*Subject Name Not More Than 09 Characters.';
            }else{
                echo 'Not Added';
            }
            ?>
        </div>
        <div class="w3-small w3-teal w3-padding w3-margin-bottom" style="text-align: center;font-family: cursive;">
            <?php require_once '../includes/footer.inc.php'; ?>
        </div>
    </body>
</html>
