<?php include_once('reg.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Register</title>
    <link rel="stylesheet" href="LoginRegStylesheet.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="battleship.css">
    <?php include_once('headers.php'); ?>
  </head>

  <body>
    <center>
      <div id="login-form">
        <form method="post">
        <table align="center" width="30%" border="0">
          <tr>
            <td><input type="text" name="uname" placeholder="Username" required /></td>
          </tr>
          <tr>
            <td><input type="email" name="email" placeholder="Email" required /></td>
          </tr>
          <tr>
            <td><input type="password" name="pass" placeholder="Password" required /></td>
          </tr>
          <tr>
            <td><button type="submit" name="btn-signup">Sign Up</button></td>
          </tr>
          <tr>
            <td align="center"><p>Already have an account?</p><a href="login.php">Sign In Here</a></td>
          </tr>
        </table>
        </form>
      </div>
    </center>
  </body>
</html>
