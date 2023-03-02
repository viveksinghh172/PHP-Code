<?php
    require_once '../includes/admin/secure.inc.php';
    $sno = $_SESSION['sno'];
    $subject = $_SESSION['subject'];
    $question = $_REQUEST['question'];
    $a = $_REQUEST['a'];
    $b = $_REQUEST['b'];
    $c = $_REQUEST['c'];
    $d = $_REQUEST['d']; 
    $correct_answer = $_REQUEST['correct_answer']; 
    $query = "update $subject set question='$question', a='$a', b='$b', c='$c', d='$d',correct_answer='$correct_answer' where sno='$sno'";
    require_once '../includes/db2.inc.php';
    @mysql_query($query);
    //Redirecting the Browser
    header('Location: listed_question.php');      
?>