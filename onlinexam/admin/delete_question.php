<?php
require_once '../includes/admin/secure.inc.php';
$subject = $_SESSION['subject'];
$sno = $_REQUEST['sno'];
$query = "delete from $subject where sno=$sno";
    require_once '../includes/db2.inc.php';
    mysql_query($query);
    header('Location: list_question.php?subject='.$subject.'');
?>