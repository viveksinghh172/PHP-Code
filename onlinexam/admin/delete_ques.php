<?php
    require_once '../includes/admin/secure.inc.php';
    $sno = $_REQUEST['sno'];
    $subject = $_SESSION['subject'];
    $query = "delete from $subject where sno='$sno'";
    require_once '../includes/db2.inc.php';
    mysql_query($query);
    //Redirecting the Browser
    header('Location:show_ques.php?status=3');      //you can not generate output if U want to redirect
?>