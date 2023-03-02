<?php
$query = "select * from updates";
require_once './includes/db.inc.php';
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
?>
<h4>Recent Updates</h4>
<ul style="margin-left: 2px;">
    <li><b style="color: #444444;padding-left: 4px;"><?php echo $row['txt1'] ?></b></li>
    <li><b style="color: #444444;margin-right: 4px;"><?php echo $row['txt2'] ?></b></li>
    <li><b style="color: #444444;margin-right: 4px;"><?php echo $row['txt3'] ?></b></li>
</ul>