<?php 
$subject = 'demo';
$status = 0;
$template = 0;
$query = "select  * from $subject ";
require_once './includes/db.inc.php';
$result = mysql_query($query);
//$tablenames[] = array();
$arraycount = 0;
while ($row = mysql_fetch_row($result)) {
    $tablenames[$arraycount] = $row[0];
    $arraycount++;
    $status = 1;
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
    </head>
    <body>

        <div class="w3-container" style="padding:0.01em 0px;border-radius: 5px;">
            <?php require_once './includes/header.inc.php'; ?>
        </div>


        <div id="content">
            <hr style="border: 5px solid red;">
            <div class="w3-display-container w3-text-white">
            <img src="./images/black.jpg" alt="Lights" style="width:100%">
            <div class="w3-display-topleft w3-container w3-white" style="margin: 10px;"><strong  style="color: #2196F3;font-size: 18px;font-family: Myriad Pro,serif;">Welcome</strong></div>
            <div class="w3-display-topright w3-container w3-white" style="margin: 10px;"><strong  style="color: #2196F3;font-size: 18px;font-family: Myriad Pro,serif;">Time :<?php if($status==1) { echo $arraycount; } else { echo 0;}  ?> Min.</strong></div>
            <div class="w3-display-bottomleft w3-container w3-white" style="margin: 10px;"><strong  style="color: #2196F3;font-size: 18px;font-family: Myriad Pro,serif;">Subject Name : Demo</strong></div>
            <div class="w3-display-bottomright w3-container w3-white" style="margin: 10px;"><strong  style="color: #2196F3;font-size: 18px;font-family: Myriad Pro,serif;">No. of Questions :<?php if($status==1) { echo $arraycount; }else { echo 0;} ?></strong></div>
            <div class="w3-display-middle w3-large w3-blue"><strong style="color: #ff0;font-size: 25px;border:2px solid yellow; border-radius: 7px;"><a href="./start_quiz.php">START EXAM</a></strong></div>
            </div>
        </div>


        <div class="w3-small w3-teal w3-padding w3-margin-bottom" style="text-align: center;font-family: cursive;">
            <?php require_once './includes/footer.inc.php'; ?>
        </div>
    </body>
</html>
