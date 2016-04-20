<?php
  session_start();

  include_once 'need/dbconnect.php';

  $sql = "SELECT * FROM `topics`";

  $result = mysql_query($sql);

  if(isset($_POST['btn-signup']))
  {
   $ts = mysql_real_escape_string($_POST['ts']);
   $tc = mysql_real_escape_string($_GET['id']);
   if(mysql_query("INSERT INTO posts(post_content,post_date,post_topic,post_by)
   VALUES('". $ts . "',NOW()," . $tc . "," . $_SESSION['user'] . ")"))
   {
    ?>
          <script>alert('Reply Successfull');</script>
          <?php
          header("Location: /webtech/forums/forums.php");
   }
   else
   {
    ?>
          <script>alert('reply failed');</script>
          <?php
   }
  }
?>
<?php include_once('need/usersession.php'); ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Reply</title>
    <link rel="stylesheet" href="need/formStylesheet.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="need/battleship.css">
    <?php include_once('need/headers.php'); ?>
  </head>

  <body>
    <form method="post">
      <table align="center" width="30%" border="0">
        <tr>
          <td><textarea name="ts" placeholder="Reply" required /></textarea></td>
        </tr>
        <tr>
          <td><button type="submit" name="btn-signup">Reply</button></td>
        </tr>
      </table>
    </form>

</body>
</html>
