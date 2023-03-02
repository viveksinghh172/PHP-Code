<?php
require_once '../includes/admin/secure.inc.php'; 
    $status = 0;
    $errors = array();
    $user_name=$_SESSION['user_name'];
    function get_file_name($file_name) {
        $str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $str = str_shuffle($str);
        $str = substr($str, 0,20);
        $i = strpos($file_name, '.');
        $ext_name = substr($file_name, $i);
        return $str.$ext_name;
    }
    @$file_name = $_FILES['photo']['name'];
    @$file_size = $_FILES['photo']['size'];
    @$file_type = $_FILES['photo']['type'];
    @$temp_name = $_FILES['photo']['tmp_name'];
    @$file_name = get_file_name($file_name);
    if($file_size==0)
        {
            $errors['photo']= '*Select Any Photo';
        }    
        $i = strpos($file_name, '.');
        $ext_name = substr($file_name, $i);
    if(count($errors)==0){    
        if($ext_name != '.jpg'){
                $errors['ext_name'] = '*Photo Must Be Only in JPG Formats';
            }
        }
    if(count($errors)==0){
            if(($file_size) > 2000000){
                $errors['file_size'] = '*File Size Must Be Less Than 2.00MB.';
            }
        }
    if(count($errors)==0){
    move_uploaded_file($temp_name, '../upload/'.$file_name);
    $query = "update users set photo ='$file_name'where user_name='$user_name'";
    require_once '../includes/db.inc.php';
    if (@mysql_query($query)) {
    $status = 1;
}
 else {
    $status = 2;
}    
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
            <?php require_once '../includes/header.inc.php'; ?>
        </div>
        <?php require_once '../includes/admin/card.inc.php'; ?>

        <div id="content" style="margin-left: 250px;">
            <?php require_once('../includes/admin/menu.inc.php'); ?>
            <hr style="border: 5px solid red;">
            <h5>Image Size : <?php echo $file_size; ?> KB</h5>
            <?php if(isset($errors['photo'])) { ?> 
                <span class="error"><?php echo $errors['photo']; ?></span>
            <?php } ?>
            <?php if(isset($errors['ext_name'])) { ?> 
                <span class="error"><?php echo $errors['ext_name']; ?></span>
            <?php } ?>
            <?php if(isset($errors['file_size'])) { ?> 
                <span class="error"><?php echo $errors['file_size']; ?></span>
            <?php } ?>    
            <?php
            if ($status==1) {
                echo '<h2>Successfully Changed</h2>';
                
            }elseif($status==2){
                echo 'Not Changed<br>';
                echo 'Please Try Again Later.';
            }
            ?>
        </div>
        <div class="w3-small w3-teal w3-padding w3-margin-bottom" style="text-align: center;font-family: cursive;">
            <?php require_once '../includes/footer.inc.php'; ?>
        </div>
    </body>
</html>
