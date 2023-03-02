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
        <h2>Factors of <?php echo $x;?></h2>
        <hr>
        <?php
            for($i=1;$i<=$x;$i++){
                if($x%$i==0){
                    echo $i.'<br>';
                }
            }
        ?>
        <hr>
        <a href="input.html">Try Again</a>
    </body>
</html>
