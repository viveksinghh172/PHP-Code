<?php 
require_once '../includes/member/secure.inc.php';
$status =0;
$temp = 0;
$template = 0;
$user_name = $_SESSION['user_name'];
$subject = $_SESSION['subject']; 
$total = $_SESSION['arraycount'];
for($i=1;$i<=$_SESSION['arraycount'];$i++)
    {
        $j=$_REQUEST[$i];
        $query = "update $subject set given_answer ='$j'where sno='$i'";
        require_once '../includes/db2.inc.php';
        @mysql_query($query);  
    }
?>
<?php 
                $res = 0;
                $query = "select * from $subject ";
                require_once '../includes/db2.inc.php';
                $result = mysql_query($query);
                
                while ($row = mysql_fetch_assoc($result)) {
                    
                //echo $row['given_answer'].'<br>';
                //echo $row['correct_answer'].'<br>';
                if($row['correct_answer'] == $row['given_answer'])
                {   
                $res++;
                }   
                }
                $d1 = time();
                $date = date('d-M-Y h:i:s A',$d1);
                $wrong=$_SESSION['arraycount']- $res;
                $query = "insert into result values('$subject','$user_name','$total','$res','$wrong','$date')";
                require_once '../includes/db.inc.php';
                mysql_query($query);
                
                
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
            

            <h1><b>Result :-</b></h1>
            <h2>Total Questions : <p style="color: blue;"><?php echo $_SESSION['arraycount']; ?></p></h2>
            
            <h2>Correct Answers : <p style="color: green;"><?php echo $res; ?></p></h2>
            
            <h2>Wrong Answers : <p style="color: red;"><?php
            echo $wrong; 
            ?></p></h2>    
        </div>
        <div class="w3-small w3-teal w3-padding w3-margin-bottom" style="text-align: center;font-family: cursive;">
            <?php require_once '../includes/member/footer.inc.php'; ?>
        </div>
    </body>
</html>
