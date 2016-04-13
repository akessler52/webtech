<?php
  session_start();
  include_once 'need/dbconnect.php';

  if(!isset($_SESSION['user']))
  {
    header("Location: login.php");
  }

  $res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
  $userRow=mysql_fetch_array($res);

  $res=mysql_query("SELECT * FROM categories");
?>
<!DOCTYPE html>
<html>
  <head lang="en">
      <meta charset="utf-8"/>
      <title>Forums</title>
      <link rel="stylesheet" type="text/css" href="need/battleships.css">
      <?php include_once('need/headers.php'); ?>
  </head>
   <body>
     <table>
     <?php
       if(!$res)
       {
           echo 'The categories could not be displayed, please try again later.';
       }
       else
       {
           if(mysql_num_rows($res) == 0)
           {
               echo 'No categories defined yet.';
           }
           else
           {
               //prepare the table
               echo '<table border="1">
                     <tr>
                       <th>Category</th>
                       <th>Last topic</th>
                     </tr>';

               while($row = mysql_fetch_assoc($res))
               {
                   echo '<tr>';
                       echo '<td class="leftpart">';
                           echo '<h3><a href="category.php?cat_id=">' . $row['cat_name'] . '</a></h3>' . $row['cat_description'];
                       echo '</td>';
                       echo '<td class="rightpart"><a href="topic.php?topic_id=">Topic subject</a></td>';
                   echo '</tr>';
               }
           }
       }
     ?>
   </table>
  </body>
</html>
