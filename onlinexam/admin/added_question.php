<?php
require_once '../includes/admin/secure.inc.php';
$status = 0;
    {
    $subject = $_SESSION['subject'];
    $sno = $_POST['sno'];
    $question = $_POST['question'];
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];
    $correct_answer = $_POST['correct_answer'];
    $query = "INSERT INTO $subject(sno,question, a, b, c, d, correct_answer) VALUES ($sno,'$question','$a','$b','$c','$d','$correct_answer')";
    require_once '../includes/db2.inc.php';
    mysql_query($query);
    $status = 1;
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
            <div class="w3-card-4">

                <div class="w3-container w3-green">
                    <h2 style="text-align: center;"><?php echo $subject; ?></h2>
                </div>
                <?php if($status==1) { ?>
                <h2>Question Successfully Added.</h2>
                <?php }else { ?>
                <h2>Not Added.</h2>
                <?php } ?>

            </div>

        </div>
        <div class="w3-small w3-teal w3-padding w3-margin-bottom" style="text-align: center;font-family: cursive;">
            <?php require_once '../includes/footer.inc.php'; ?>
        </div>
    </body>
</html>
	