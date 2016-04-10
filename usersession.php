<?php
  if(!isset($_SESSION['user']))
  {

  }

  elseif(isset($_SESSION['user']))
  {
    session_start();
    include_once 'dbconnect.php';
    $res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
    $currentUser=mysql_fetch_array($res);
  }

?>
