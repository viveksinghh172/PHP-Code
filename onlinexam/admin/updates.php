<?php
require_once '../includes/admin/secure.inc.php';
$status = 0;
$template = 0;
$errors = array();


if (isset($_POST['submit'])) {
    $txt1 = $_POST['txt1'];
    $txt2 = $_POST['txt2'];
    $txt3 = $_POST['txt3'];

    if (count($errors) == 0) {
        if (strlen($txt1) > 26) {
            $errors['txt_length'] = '*Text must be at least 25 characters';
        }
        if (strlen($txt2) > 26) {
            $errors['txt_length'] = '*Text must be at least 25 characters';
        }
        if (strlen($txt3) > 26) {
            $errors['txt_length'] = '*Text must be at least 25 characters';
        }
    }

    if (count($errors) == 0) {
        $query = "update updates set txt1='$txt1',txt2='$txt2',txt3='$txt3'";
        require_once '../includes/db.inc.php';
        @mysql_query($query);
        $errors['added'] = 'Successfully Updated';
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



        <?php require_once '../includes/admin/card.inc.php'; ?>
            <div id="content" style="margin-top: 50px;" >
            <?php
            $query = "select * from updates ";
            require_once '../includes/db.inc.php';
            $result = mysql_query($query);
            if(mysql_num_rows($result)==1)
                    {
                    $row = @mysql_fetch_assoc($result);
                    } 
                    {
            ?>

                <form action="updates.php" method="POST">
                    <div class="w3-card-4" style="padding:20px; background-color: white;">

                        <div class=" w3-blue" style="padding:05px;margin-top: 10px;margin-bottom: 10px;">
                            <h2>EDIT UPDATES </h2>
                        </div>
                        <label>Update 1:</label>
                        <input required class="w3-input" type="text" name="txt1" value="<?php echo $row['txt1']; ?>">     
                        <label>Update 2:</label>
                        <input required class="w3-input" type="text" name="txt2" value="<?php echo $row['txt2']; ?>">
                        <label>Update 3:</label>
                        <input required class="w3-input" type="text" name="txt3" value="<?php echo $row['txt3']; ?>"> <br>
                        <button class="w3-btn w3-green w3-hover-aqua" type="submit" name="submit">SAVE</button>
                        <div>
<?php if (isset($errors['txt_length'])) { ?> 
                                <span class="error"><?php echo $errors['txt_length']; ?></span>
<?php } ?>

<?php if (isset($errors['added'])) { ?> 
                                <span class="error"><?php echo $errors['added']; ?></span>
<?php } ?>
                        </div>
                    </div>
                </form>
                    <?php } ?>

            </div>
        </div>


        <div class="w3-small w3-teal w3-padding w3-margin-bottom" style="text-align: center;font-family: cursive;">
<?php require_once '../includes/footer.inc.php'; ?>
        </div>
    </body>
</html>
