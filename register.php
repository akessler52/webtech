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
            <td><input type="password" name="pass" placeholder="Password" id="password" required /></td>
          </tr>
          </tr>
          <tr>
            <td><input type="password" name="password_confirm" placeholder="Confirm Password" id="password_confirm" oninput="check(this)" required /></td>
          </tr>
          <script language='javascript' type='text/javascript'>
            function check(input) {
              if (input.value != document.getElementById('password').value) {
                input.setCustomValidity('Password Must be Matching.');
              }
              else {
                input.setCustomValidity('');
              }
            }
          </script>
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
