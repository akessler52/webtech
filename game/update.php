<?php
$Username = mysql_real_escape_string($_POST['username']);
$Score = mysql_real_escape_string($_POST['score']);   

if(mysql_query("INSERT INTO highscore(score) VALUES('" . $Score . "')"))
 ?> <script> alert('Something's gone wrong); </script> <?php
?>