<?php include_once('lin.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="LoginRegStylesheet.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="battleship.css">
    <?php include_once('header.php'); ?>
  <body>
    <center>
      <div id="login-form">
      <form method="post">
        <table align="center" width="30%" border="0">
          <tr>
            <td><input type="text" name="email" placeholder="Your Email" required /></td>
          </tr>
          <tr>
            <td><input type="password" name="pass" placeholder="Your Password" required /></td>
          </tr>
          <tr>
            <td><button type="submit" name="btn-login">Sign In</button></td>
          </tr>
          <tr>
            <td><p>Don't have an account?</p><a href="register.php">Sign Up Here</a></td>
          </tr>
        </table>
      </form>
      </div>
    </center>
  </body>
</html>
