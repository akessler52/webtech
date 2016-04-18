<?php
  session_start();

  include_once 'need/dbconnect.php';



  $sql = "SELECT * FROM `categories`";

  $result = mysql_query($sql);

  if(isset($_POST['btn-signup']))
  {
   $ts = mysql_real_escape_string($_POST['ts']);
   $tc = mysql_real_escape_string($_POST['tc']);
   if(mysql_query("INSERT INTO topics(topic_subject,topic_date,topic_cat,topic_by)
   VALUES('". $ts . "',NOW()," . $tc . "," . $_SESSION['user'] . ")"))
   {
    ?>
          <script>alert('New Topic Created');</script>
          <?php
          header("Location: /webtech/forums/forums.php");
   }
   else
   {
    ?>
          <script>alert('Could not create topic');</script>
          <?php
   }
  }
?>
