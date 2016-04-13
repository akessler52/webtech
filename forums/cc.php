<?php
  session_start();

  include_once 'need/dbconnect.php';

  if(isset($_POST['btn-signup']))
  {
   $cname = mysql_real_escape_string($_POST['cname']);
   $cd = mysql_real_escape_string($_POST['cd']);

   if(mysql_query("INSERT INTO categories(cat_name,cat_description) VALUES('$cname','$cd')"))
   {
    ?>
          <script>alert('New Category Created');</script>

          <?php
          header("Location: /webtech/forums/forums.php");
   }
   else
   {
    ?>
          <script>alert('Could not create catagory');</script>
          <?php
   }
  }
?>
