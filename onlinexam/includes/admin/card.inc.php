<div style="float: left;">
            <div class="w3-card-8 w3-green" style="width: 190px; height: 255px;">
                <?php require_once('../includes/admin/image.inc.php'); ?>
                <div class="w3-container">
                <h3 style="margin-left: 10px;"><p style="color: blue;">Welcome</p> <p style="color: #cddc39;font-size: 0.9em;"><?php echo $_SESSION['name']; ?></p></h3>
                    <a href="change_image.php" style="margin-left: 05px;"><img title="Change Image" src="../upload/<?php echo $row['photo']; ?>" alt="Avatar" style="width:150px;height:145px;"/></a>
                    <!--<h5 style="margin-left: 20px;">Edit Profile</h5>-->
                </div>

            </div>
</div>