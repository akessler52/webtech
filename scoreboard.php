<?php include_once('usersession.php'); 
 $res2=mysql_query("SELECT * FROM highscore ORDER BY score DESC");
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8"/>
    <title>Scorebord</title>
    <link rel="stylesheet" type="text/css" href="battleships.css">
    <?php include_once('headers.php'); ?>
    </head>
 <body>
<table>
     <?php
           echo '<h2>Scoreboard</h2>';
		   //prepare the table
		   echo '<table border="1">
				 <tr>
				   <th>User</th>
				   <th>Wins</th>
				 </tr>';

               while($row = mysql_fetch_assoc($res2))
               {
                   //$sql2 = "SELECT * FROM topics ORDER BY `topics`.`topic_id` DESC WHERE topic_cat = " . $row['cat_id'];
				   //$sql2 = "SELECT * FROM `topics` WHERE topic_cat = " . $row['cat_id'];
				   $sql2 = "SELECT username FROM users WHERE user_id = " . $row['scoreBy'];
                   $result2 = mysql_query($sql2);
                   $row2 = mysql_fetch_assoc($result2);
                 //while($trow = mysql_fetch_assoc(mysql_query("SELECT topic_id,topic_subject,topic_date,topic_cat FROM topics WHERE topic_cat = " . mysql_real_escape_string($_GET['id']))))

                 //$i=mysql_query("SELECT topic_subject FROM topics WHERE topic_cat='$row['cat_id']'");
                   $USERNAME = $row2['username'];
                   echo '<tr>';
                       echo '<td class="leftpart">';
                           //echo '<h3><a href="category.php?cat_id=' . $row['cat_id'] . '">' . $row['cat_name'] . '</a></h3>' . $row['cat_description'];
                           echo '<h3>' . $USERNAME . '</h3>';						   
                       echo '</td>';
						   //echo '<td class="rightpart"><a href="topic.php?id=' . $topicid . '">' . $row2['topic_subject'] . '</a></td>';
                       echo '<td class="rightpart">';
						   echo $row['score'] . '</td>';
                   echo '</tr>';

               }
     ?>
   </table>

</body>
</html>
