<?php
require_once '../includes/admin/secure.inc.php';
$status = 0;
$sub = $_REQUEST['subject'];
$subject = strtoupper($sub);
$_SESSION['subject'] = $sub;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>.::ONLINE QUIZZ::.</title>
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../css/w3.css" rel="stylesheet" type="text/css"/>
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
        <style>
            th
            {
                color: #2196F3;
                
                font-size: 12px;
                text-align: center;
            }
            td
            {
                color: #4caf50;
                padding: 5px;
                font-size: 15px;
            }
        </style>
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

                <form class="w3-container w3-white" style="padding: 40px;;padding-left: 20%;" action="added_question.php" method="post">
                    <table border="0" cellpadding="10">
                        <tbody>
                            <tr>
                                <td><input style="width: 250px;" required class="w3-input-group" type="text" name="sno" placeholder="QUESTION NO." value="" /></td>
                            </tr>
                            <tr>
                                <td><input style="width: 250px;" required class="w3-input" type="text" name="question" placeholder="QUESTION" value="" /></td>
                            </tr>
                            <tr>
                                <td><input type="text" required name="a" placeholder="OPTION A" value="" /></td>
                                <td><input type="text" required name="b" placeholder="OPTION B" value="" /></td>
                            </tr>
                            <tr>
                                <td><input type="text" required name="c" placeholder="OPTION C" value="" /></td>
                                <td><input type="text" required name="d" placeholder="OPTION D" value="" /></td>
                            </tr>
                            <tr>
                                <td><input type="text" required name="correct_answer" placeholder="CORRECT ANSWER(ex:a)" value="" /></td>
                                <td colspan="2"><input class="w3-btn w3-blue" type="submit" value="ADD QUESTION" name="submit" /></td>
                            </tr>
                        </tbody>
                    </table>

                    <p class="error" style="font-size:1.1em;"><strong>NOTE  : </strong>Don't &nbsp; Enter &nbsp; Already &nbsp; Entered &nbsp; Question &nbsp; No. &nbsp; .</p>

                </form>

            </div>
        </div>
        <div class="w3-small w3-teal w3-padding w3-margin-bottom" style="text-align: center;font-family: cursive;">
            <?php require_once '../includes/footer.inc.php'; ?>
        </div>
    </body>
</html>
