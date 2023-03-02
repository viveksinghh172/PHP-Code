<?php 
$status =0;
$temp = 0;
$template = 0;
$subject = 'demo'; 
$query = "select  * from $subject ";
require_once './includes/db.inc.php';
$result = mysql_query($query);
$arraycount = 0;
while ($row = mysql_fetch_row($result)) {
    $tablenames[$arraycount] = $row[0];
    $arraycount++;
}
$total = $arraycount;
for($i=1;$i<=$arraycount;$i++)
    {
        $j=$_REQUEST[$i];
        $query = "update $subject set given_answer ='$j'where sno='$i'";
        require_once './includes/db.inc.php';
        @mysql_query($query);  
    }
?>
<?php 
                $res = 0;
                $query = "select * from $subject ";
                require_once './includes/db.inc.php';
                $result = mysql_query($query);
                
                while ($row = mysql_fetch_assoc($result)) {
                if($row['correct_answer'] == $row['given_answer'])
                {   
                $res++;
                }   
                }   
                $wrong=$arraycount - $res;
            ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>.::ONLINE QUIZZ::.</title>
        <link href="./css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="./css/w3.css" rel="stylesheet" type="text/css"/>
        <link href="./css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <div class="w3-container" style="padding:0.01em 0px;border-radius: 5px;">
            <?php require_once './includes/header.inc.php'; ?>
        </div>
        <div id="content" style="margin-left: 250px;">
            <hr style="border: 5px solid red;">
            <h1><b>Result :-</b></h1>
            <h2>Total Questions : <p style="color: blue;"><?php echo $arraycount; ?></p></h2>
            
            <h2>Correct Answers : <p style="color: green;"><?php echo $res; ?></p></h2>
            
            <h2>Wrong Answers : <p style="color: red;"><?php
            echo $wrong; 
            ?></p></h2>   
            <a href="index.php" style="float: right;"><button class="w3-btn w3-round-large w3-ripple w3-red">HOME</button></a>
        </div>
        <div class="w3-small w3-teal w3-padding w3-margin-bottom" style="text-align: center;font-family: cursive;">
            <?php require_once './includes/footer.inc.php'; ?>
        </div>
    </body>
</html>
