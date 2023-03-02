<?php 
$status = 1;
$template = 0;
$temp = 0;
$temporary = 0;
$subject = 'demo';
$query = "select * from $subject";
    require_once './includes/db.inc.php';
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
        <link href="./css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="./css/w3.css" rel="stylesheet" type="text/css"/>
        <link href="./css/style.css" rel="stylesheet" type="text/css"/>
        <link href="./css/jquery-ui-1.9.2.custom.css" rel="stylesheet">
	<script src="./js/jquery-1.8.3.js"></script>
	<script src="./js/jquery-ui-1.9.2.custom.js"></script>
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
            <?php require_once './includes/member/header.inc.php'; ?>
        </div>
        <div id="content" style="margin-left: 250px;">
            <hr style="border: 5px solid red;">
            <?php if($status==1) { ?>
            <form action="answer.php" method="GET">  
            <h2>Quiz Started</h2>
            <p class="error" style="text-align:center;">Note : Option A is Selected Automatically.</p>
            <div id="accordion">
                <?php
                    while ($row = mysql_fetch_assoc($result)) { 
                ?>
                <p>Question No. <?php echo $row['sno']; ?></p>
                <div>
                    <strong> Ques. <?php echo $row['question']; ?></strong><br>
                    <strong>Options :</strong><br>
                    <input type="radio" name="<?php echo  $row['sno'];?>" checked="" value="No Selected" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NO SELECTED<br>
                    <input type="radio" name="<?php echo  $row['sno'];?>" value="a" />&nbsp;&nbsp;a)&nbsp;&nbsp;<?php echo $row['a']; ?><br>
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
            <?php require_once './includes/member/footer.inc.php'; ?>
        </div>
    </body>
</html>
