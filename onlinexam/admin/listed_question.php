<?php
require_once '../includes/admin/secure.inc.php'; 
    $status = 0;
    $template = 0;
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
        <?php require_once '../includes/admin/card.inc.php'; ?>
        <div id="content" style="margin-left: 250px;">
            <?php require_once('../includes/admin/menu.inc.php'); ?>
            <hr style="border: 5px solid red;">
            
        <?php
            $query = "select * from $subject";
            require_once '../includes/db2.inc.php';
            $result = @mysql_query($query);
            $status = 0;
            if(@mysql_num_rows($result)>0){
            $status = 1;
            }
            ?>
            
            
            
        <h2 style="text-align: center;">List of Questions</h2>
            
            <table border="0" cellpadding="10" style="background-color: white;">
            <thead>
                <tr style="background-color: silver;">
                    <th>SNo.</th>
                    <th>Question</th>
                    <th>A</th>
                    <th>B</th>
                    <th>C</th>
                    <th>D</th>
                    <th>Correct Answer</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                </tr>
                </thead>
                <?php
                        while ($row = mysql_fetch_assoc($result)) {
                ?>
                <tbody>
                <tr>
                    <td class="dark"><?php echo $row['sno']; ?></td>
                    <td><?php echo $row['question']; ?></td>
                    <td class="light"><?php echo $row['a']; ?></td>
                    <td><?php echo $row['b']; ?></td>
                    <td class="light"><?php echo $row['c']; ?></td>
                    <td><?php echo $row['d']; ?></td>
                    <td class="dark"><?php echo $row['correct_answer']; ?></td>
                    <td><a title="Edit" href="edit_question.php?sno=<?php echo $row['sno']; ?>"><img src="../images/edit.jpg" alt=""/></a></td>
                    <td><a onclick="return confirm('This record will be deleted.')" title="Delete" href="delete_question.php?sno=<?php echo $row['sno']; ?>"><img src="../images/delete.jpg" alt=""/></a></td>
                </tr>
                <?php } ?>
            
            <?php  ?>
              <?php if($status==0) { ?>
                <h2 style="color: red">Error ! No record found.</h2>
              <?php } ?>
            </tbody>
        </table> 
        </div>
        <div class="w3-small w3-teal w3-padding w3-margin-bottom" style="text-align: center;font-family: cursive;">
            <?php require_once '../includes/footer.inc.php'; ?>
        </div>
    </body>
</html>
