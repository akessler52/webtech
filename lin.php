<?php
  session_start();
  include_once 'dbconnect.php';

  if(isset($_SESSION['user'])!="")
  {
   header("Location: home.php");
  }
  if(isset($_POST['btn-login']))
  {
     $user = mysql_real_escape_string($_POST['username']);
     $pass = mysql_real_escape_string($_POST['pass']);
     $res=mysql_query("SELECT * FROM users WHERE username='$user'");
     $row=mysql_fetch_array($res);
     if($row['password']==md5($pass))
     {
        $_SESSION['user'] = $row['user_id'];
        header("Location: home.php");
     }
     else
     {
        ?>
        <script>alert('Username and or Password Incorrect');</script>
        <?php
     }

  }
?>
