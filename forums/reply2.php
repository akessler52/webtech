<?php include_once('connectforums.php'); ?>

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
    <form method="post" action="reply.php?id=5">
      <textarea name="reply" id="reply"></textarea>
      <input type="submit" value="Submit reply" />
    </form>
<?php
    if(!$_SESSION['user'])
    {
        echo 'You must be signed in to post a reply.';
    }
    else
    {
        $qw = "SELECT topic_id FROM topics WHERE topic_cat = " . mysql_real_escape_string($_GET['cat_id']);
        //a real user posted a real reply
        $sql = "INSERT INTO posts(post_content,post_date,post_topic,post_by)
                VALUES ('" . $_POST['reply'] . "',NOW()," . $qw . "," . $userRow['user_id'] . ")";

        $result = mysql_query($sql);

        if(!$result)
        {
            echo 'Your reply has not been saved, please try again later.';
        }
        else
        {
            echo 'Your reply has been saved, check out <a href="topic.php?id=' . htmlentities($_GET['id']) . '">the topic</a>.';
        }
    }
?>
</body>
</html>
