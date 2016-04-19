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
<?php
//mysql_query("SELECT * FROM categories WHERE cat_id = " . mysql_real_escape_string($_GET['cat_id']));
$sql = "SELECT * FROM topics WHERE topic_id = " . mysql_real_escape_string($_GET['id']);


$result = mysql_query($sql);

if(!$result)
{
    echo 'something didnt work, ERROR 3' . mysql_error();
}
else
{
    if(mysql_num_rows($result) == 0)
    {
        echo 'Thats not a topic!!! ERROR 4';
    }
    else
    {
        //display category data
        while($row = mysql_fetch_assoc($result))
        {
            echo '<h2></h2>';
        }

        //do a query for the topics
        $sql = "SELECT * FROM `posts` LEFT JOIN `users` ON post_by = user_id WHERE post_topic = " . mysql_real_escape_string($_GET['id']);

        $result = mysql_query($sql);

        if(!$result)
        {
            echo 'oops... something didnt work :-(';
        }
        else
        {
            if(mysql_num_rows($result) == 0)
            {
                echo 'there have been no postes in this topic yet.';
            }
            else
            {
                $header=mysql_query("SELECT topic_subject FROM topics WHERE topic_id = " . mysql_real_escape_string($_GET['id']));
                //prep the table
                echo '<table border="1">';
                echo      '<tr>';
                echo        '<th colspan="2">_</th>';
                echo      '</tr>';

                while($row = mysql_fetch_assoc($result))
                {

                    echo '<tr>';
                        echo '<td width="10%">';
                            echo '<h3><a>' . $row['username'] . '</a><h3>';
                            echo date('d-m-Y', strtotime($row['post_date'])) . '<br>';
                            echo date('h:i A', strtotime($row['post_date']));
                        echo '</td>';
                        echo '<td class="rightpart">';
                            echo $row['post_content'];
                        echo '</td>';
                    echo '</tr>';
                }
            }
        }
    }
}
?>
</body>
</html>
