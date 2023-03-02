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

$temp = 0;
$temporary = 0;
$subject = $_SESSION['subject'];
$query = "select * from $subject";
    require_once '../includes/db2.inc.php';
    $result = @mysql_query($query);
    $temp = 0;
    if(@mysql_num_rows($result)>0){
        $temp = 1;
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
        <link href="../css/jquery-ui-1.9.2.custom.css" rel="stylesheet">
	<script src="../js/jquery-1.8.3.js"></script>
	<script src="../js/jquery-ui-1.9.2.custom.js"></script>
	<script>
	$(function() {		
		$( "#accordion" ).accordion();
	});
	</script>
        <style>
            strong
            {
                color: blue;
            }
        </style>
        
    </head>
    <body>

        <div class="w3-container" style="padding:0.01em 0px;border-radius: 5px;">
            <?php require_once '../includes/member/header.inc.php'; ?>
        </div>
        <div style="float: left;">
            <div class="w3-card-8 w3-green" style="width: 190px; height: 255px;">
                <?php
                $user_name = $_SESSION['user_name'];
                $queryy = "select * from users where user_name= '$user_name'";
                require_once '../includes/db.inc.php';
                $resultt = @mysql_query($queryy);
                if(mysql_num_rows($resultt)==1)
                {
                $roww = mysql_fetch_assoc($resultt);
                }
                ?>
                <div class="w3-container">
                    <h3 style="margin-left: 10px;"><p style="color: blue;">Welcome</p> <p style="color: #cddc39;font-size: 0.9em;"><?php echo $_SESSION['name']; ?></p></h3>
                    <a href="change_image.php" style="margin-left: 05px;"><img title="Change Image" src="../upload/<?php echo $roww['photo']; ?>" alt="Avatar" style="width:150px;height:145px;"/></a>
                    <!--<h5 style="margin-left: 20px;">Edit Profile</h5>-->
                </div>

            </div>
        </div>

        <div id="content" style="margin-left: 250px;">
            <?php require_once('../includes/member/menu.inc.php'); ?>
            <hr style="border: 5px solid red;">
            <?php if($status==1) { ?>
            <form action="answer.php" method="GET">  
            <h2>Quiz Started</h2>
            <p class="error" style="text-align:center;">Note : Attempt All Questions.</p>
            <div id="accordion">
                <?php
                    while ($row = mysql_fetch_assoc($result)) { 
                ?>
                <p>Question No. <?php echo $row['sno']; ?></p>
                <div>
                    <strong> Ques. <?php echo $row['question']; ?></strong><br>
                    <strong>Options :</strong><br>
                    <input type="radio" name="<?php echo  $row['sno'];?>" checked="" value="NO SELECTED" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NO SELECTED<br>
                    <input type="radio" name="<?php echo  $row['sno'];?>" value="b" />&nbsp;&nbsp;a)&nbsp;&nbsp;<?php echo $row['a']; ?><br>
                    <input type="radio" name="<?php echo  $row['sno'];?>" value="b" />&nbsp;&nbsp;b)&nbsp;&nbsp;<?php echo $row['b']; ?><br>
                    <input type="radio" name="<?php echo  $row['sno'];?>" value="c" />&nbsp;&nbsp;c)&nbsp;&nbsp;<?php echo $row['c']; ?><br>
                    <input type="radio" name="<?php echo  $row['sno'];?>" value="d" />&nbsp;&nbsp;d)&nbsp;&nbsp;<?php echo $row['d']; ?>
                </div>
                    <?php  } ?> 
            </div><br>
            <p style="text-align: center;"><input class="w3-btn w3-blue" type="submit" value="SUBMIT"/></p>
            </form>
            <?php } else{echo 'ERROR';} ?>
        </div>
        
        <div class="w3-small w3-teal w3-padding w3-margin-bottom" style="text-align: center;font-family: cursive;">
            <?php require_once '../includes/member/footer.inc.php'; ?>
        </div>
    </body>
</html>
