<?php
  include_once 'dbconnect.php';
  if(!isset($_SESSION['user']))
  {
    include_once('header.php');
    echo "working one";
  }
  elseif(isset($_SESSION['user']))
  {
    include_once('header2.php');
    echo "working two";
  }
?>
