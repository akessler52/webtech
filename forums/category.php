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
$sql = "SELECT * FROM categories WHERE cat_id = " . mysql_real_escape_string($_GET['cat_id']);

$result = mysql_query($sql);

if(!$result)
{
    echo 'The category could not be displayed, please try again later.' . mysql_error();
}
else
{
    if(mysql_num_rows($result) == 0)
    {
        echo 'Thats not a catagory!!!';
    }
    else
    {
        //display category data
        while($row = mysql_fetch_assoc($result))
        {
            echo '<h2>Topics in ′' . $row['cat_name'] . '′ category</h2>';
        }

        //do a query for the topics
        $sql = "SELECT * FROM topics WHERE topic_cat = " . mysql_real_escape_string($_GET['cat_id']);

        $result = mysql_query($sql);

        if(!$result)
        {
            echo 'oops... something didnt work :-(';
        }
        else
        {
            if(mysql_num_rows($result) == 0)
            {
                echo 'There are no topics in this category yet.';
            }
            else
            {
                //prepare the table
                echo '<table border="1">
                      <tr>
                        <th>Topic</th>
                        <th>Created at</th>
                      </tr>';

                while($row = mysql_fetch_assoc($result))
                {
                    echo '<tr>';
                        echo '<td class="leftpart">';
                            echo '<h3><a href="topic.php?id=' . $row['topic_id'] . '">' . $row['topic_subject'] . '</a><h3>';
                        echo '</td>';
                        echo '<td class="rightpart">';
                            echo date('d-m-Y', strtotime($row['topic_date']));
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
