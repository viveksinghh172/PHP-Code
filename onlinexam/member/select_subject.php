<?php 
require_once '../includes/member/secure.inc.php';
$status = 0;
$template = 0;
$query = "show  tables from u573750671_ques ";
require_once '../includes/db2.inc.php';
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

            <h2>Select Subject..</h2>
            <form action="start.php" method="POST">
                                <?php if($status==1) { foreach($tablenames as $subject) {  ?>
                <button class="button_menu button1" name="subject" value="<?php $subject = strtoupper($subject); echo $subject;?>" type="submit" ><span><?php echo $subject; ?></span></button> 
                
                                <?php } }else{ echo 'Empty..! No Subject Here.'; }  ?>
            </form>

        </div>



        <div class="w3-small w3-teal w3-padding w3-margin-bottom" style="text-align: center;font-family: cursive;">
            <?php require_once '../includes/member/footer.inc.php'; ?>
        </div>
    </body>
</html>
