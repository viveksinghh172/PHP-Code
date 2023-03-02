<?php
    $x = $_REQUEST['num'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $count = 0;         //123
            while($x>0){
               $x = intval($x/10);
               echo $x.'<br>';
               $count++;
            }
        ?>
        <h2>It is a <?php echo $count?> Digit Number</h2>
        <hr>
        <a href="input.php">Try Again</a>
    </body>
</html>
