<?php
  include_once 'dbconnect.php';
  if(!isset($_SESSION['user']))
  {
    include_once('header.php');
  }
  elseif(isset($_SESSION['user']))
  {
    include_once('header2.php');
  }
?>
