<?php
                $user_name = $_SESSION['user_name'];
                $query = "select * from users where user_name= '$user_name'";
                require_once '../includes/db.inc.php';
                $result = @mysql_query($query);
                if(mysql_num_rows($result)==1)
                {
                $row = mysql_fetch_assoc($result);
                }
?>