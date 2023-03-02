<?php
require_once '../includes/member/secure.inc.php';
$status = 0;
$template = 0;
$user_name = $_SESSION['user_name'];
$query = "select * from result where user_name = '$user_name'";
    require_once '../includes/db.inc.php';
    $result = @mysql_query($query);
    $status = 0;
    if(@mysql_num_rows($result)>0){
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
        <style>
            th
            {
                color: #2196F3;
                border: 2px solid blue;
                font-size: 15px;
                text-align: center;
            }
            td
            {
                color: #4caf50;
                padding: 5px;
                text-align: center;
                font-size: 12px;
                border: 2px solid black;

            }
            
            .dark
            {
                background-color: #ffe7e7;
            }
            .light
            {
                background-color: #ffe7e7;
                position: relative;
            }
        </style>
    </head>
    <body>

        <div class="w3-container" style="padding:0.01em 0px;border-radius: 5px;">
            <?php require_once '../includes/header.inc.php'; ?>
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
            <h2><?php echo "PREVIOUS RESULT :"; ?></h2> 
            <?php if ($status == 0) { ?>
                <h2 style="color: red">Please Play Quiz First.</h2>
            <?php } else { ?>
                <table border="0" cellpadding="10" style="background-color: white;">
                    <thead>
                        <tr style="background-color: silver;">
                            <th>Subject Name</th>
                            <th>Username</th>
                            <th>Total Q.</th>
                            <th>Wrong</th>
                            <th>Result</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <?php
                    while ($row = mysql_fetch_assoc($result)) {
                        ?>
                        <tbody>
                            <tr>
                                <td class="dark"><?php echo $row['subject']; ?></td>
                                <td><?php echo $row['user_name']; ?></td>
                                <td class="light"><?php echo $row['total']; ?></td>
                                <td><?php echo $row['wrong']; ?></td>
                                <td class="light"><?php echo $row['result']; ?></td>
                                <td><?php echo $row['date']; ?></td>
                                </tr>
                        <?php } ?>

                    <?php } ?>
                </tbody>
            </table> 
        </div>
        <div class="w3-small w3-teal w3-padding w3-margin-bottom" style="text-align: center;font-family: cursive;">
            <?php require_once '../includes/footer.inc.php'; ?>
        </div>
    </body>
</html>
