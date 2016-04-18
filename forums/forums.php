<?php include_once('connectforums.php'); ?>
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
           echo '<h2>Categorys</h2>';
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

               while($row = mysql_fetch_assoc($res) )
               {
                 //while($trow = mysql_fetch_assoc(mysql_query("SELECT topic_id,topic_subject,topic_date,topic_cat FROM topics WHERE topic_cat = " . mysql_real_escape_string($_GET['id']))))

                 //$i=mysql_query("SELECT topic_subject FROM topics WHERE topic_cat='$row['cat_id']'");

                   echo '<tr>';
                       echo '<td class="leftpart">';
                           echo '<h3><a href="category.php?cat_id=' . $row['cat_id'] . '">' . $row['cat_name'] . '</a></h3>' . $row['cat_description'];
                       echo '</td>';
                       echo '<td class="rightpart"><a href="topic.php?topic_id=' . $row['cat_id'] . '">topic</a></td>';
                   echo '</tr>';

               }
           }
       }
     ?>
   </table>
  </body>
</html>
