<?php
  session_start();
  if(isset($_SESSION['user'])!="")
  {
    header("Location: home.php");
  }
  include_once 'dbconnect.php';

  if(isset($_POST['btn-signup']))
  {
   $uname = mysql_real_escape_string($_POST['uname']);
   $email = mysql_real_escape_string($_POST['email']);
   $pass = md5(mysql_real_escape_string($_POST['pass']));

   if(mysql_query("INSERT INTO users(username,email,password) VALUES('$uname','$email','$pass')"))
   {
    ?>
          <script>alert('registered ');</script>

          <?php
          header("Location: login.php");
   }
   else
   {
    ?>
          <script>alert('Could not register user');</script>
          <?php
   }
  }
?>
