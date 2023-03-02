<?php
require_once '../includes/admin/secure.inc.php';
$status = 0;
$sno = $_REQUEST['sno'];
$_SESSION['sno'] = $sno;
$subject = $_SESSION['subject'];

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
            <h2>EDIT QUESTION : <?php echo $sno; ?></h2>
                <div class="w3-card-4">

                    <div class="w3-container w3-green">
                        <h2 style="text-align: center;"><?php echo 'EDIT QUESTION' ?></h2>
                    </div>
                    <?php 
                    $query = "select * from $subject where sno = $sno";
                    require_once '../includes/db2.inc.php';
                    $result = @mysql_query($query);
                    if(mysql_num_rows($result)==1)
                    {
                    $row = @mysql_fetch_assoc($result);
                    } 
                    { 
                    ?>
                    <form class="w3-container w3-white" style="padding: 40px;;padding-left: 20%;" action="update_question.php" method="post">
                        <table border="0" cellpadding="10">
                            <tbody> 
                                <tr>
                                    <td><input style="width: 250px;" placeholder="QUESTION" class="w3-input" type="text" name="question" value="<?php echo $row['question']; ?>" /></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="a" placeholder="OPTION A" value="<?php echo $row['a']; ?>" /></td>
                                    <td><input type="text" name="b" placeholder="OPTION B" value="<?php echo $row['b']; ?>" /></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="c" placeholder="OPTION C" value="<?php echo $row['c']; ?>" /></td>
                                    <td><input type="text" name="d" placeholder="OPTION D" value="<?php echo $row['d']; ?>" /></td>
                                </tr>
                                <tr>
                                    <td><input type="text" placeholder="CORRECT ANSWER" name="correct_answer" value="<?php echo $row['correct_answer']; ?>" /></td>
                                    <td colspan="2"><input class="w3-btn w3-blue" type="submit" value="EDIT QUESTION" name="submit" /></td>
                            </tr>
                            </tbody>
                        </table>
                    </form>
                    <?php }  ?>
                </div>
        </div>
        <div class="w3-small w3-teal w3-padding w3-margin-bottom" style="text-align: center;font-family: cursive;">
            <?php require_once '../includes/footer.inc.php'; ?>
        </div>
    </body>
</html>
