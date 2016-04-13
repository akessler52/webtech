<?php include_once('ct.php'); ?>
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
            <td><textarea name="ts" placeholder="Topic" required /></textarea></td>
          </tr>
          <tr>
            <td><select name="tc">
              <?php while($row = mysql_fetch_assoc($result))
                      {
                          echo '<option value="' . $row['cat_id'] . '">' . $row['cat_name'] . '</option>';
                      }?>

            </select></td>
          </tr>
          <tr>
            <td><button type="submit" name="btn-signup">Create Topic</button></td>
          </tr>
        </table>
        </form>
      </div>
    </center>
  </body>
</html>
