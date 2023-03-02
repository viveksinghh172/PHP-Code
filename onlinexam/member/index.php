<?php require_once '../includes/member/secure.inc.php'; ?>
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
            <?php require_once '../includes/member/header.inc.php'; ?>
        </div>
        <?php require_once '../includes/member/card.inc.php'; ?>

        <div id="content" style="margin-left: 250px;">
            <?php require_once('../includes/member/menu.inc.php'); ?>
            <hr style="border: 5px solid red;">

            <h2>Welcome To Members Area.</h2>
            

        </div>



        <div class="w3-small w3-teal w3-padding w3-margin-bottom" style="text-align: center;font-family: cursive;">
            <?php require_once '../includes/member/footer.inc.php'; ?>
        </div>
    </body>
</html>
