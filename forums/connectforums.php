<?php
  session_start();
  include_once 'need/dbconnect.php';

  if(!isset($_SESSION['user']))
  {
    header("Location: login.php");
  }

  $res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
  $userRow=mysql_fetch_array($res);

  $res=mysql_query("SELECT * FROM categories");
?>
