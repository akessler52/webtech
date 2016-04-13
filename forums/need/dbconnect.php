<?php
  $user = 'root';
  $pass = '';

  if(!mysql_connect("localhost",$user,$pass))
  {
       die("shit... something didn't work... \n".mysql_error());
  }

  if(!mysql_select_db("FinalProject"))
  {
       die("woops, couldnt find the right database... \n ".mysql_error());
  }

?>
