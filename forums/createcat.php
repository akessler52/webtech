<?php include_once('cc.php'); ?>
<?php include_once('need/usersession.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Create Catagory</title>
    <link rel="stylesheet" href="need/formStylesheet.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="need/battleship.css">
    <?php include_once('need/headers.php'); ?>
  </head>

  <body>
    <center>
      <div id="login-form">
        <form method="post">
        <table align="center" width="30%" border="0">
          <tr>
            <td><input type="text" name="cname" placeholder="Category Name" required /></td>
          </tr>
          <tr>
            <td><textarea name="cd" placeholder="Category Description" required /></textarea></td>
          </tr>
          <tr>
            <td><button type="submit" name="btn-signup">Create Catagory</button></td>
          </tr>
        </table>
        </form>
      </div>
    </center>
  </body>
</html>
