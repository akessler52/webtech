<!DOCTYPE html>
<html>
  <head lang="en">
      <meta charset="utf-8"/>
      <title>basicnavbar</title>
      <link rel="stylesheet" type="text/css" href="mycssheet.css">
   </head>
   <body>
      <ul>
          <li><a href="/webtech/home.php">Home</a></li>
          <li><a href="/webtech/game/game.php">Game</a></li>
          <li><a href="/webtech/forums/forums.php">Forums</a></li>
          <li><a href="/webtech/scoreboard.php">Scoreboard</a></li>
          <ul style="float:right">
              <li><a href="/webtech/profile.php">Hello <?php echo $userRow['username']; ?></a></li>
              <li><a href="/webtech/logout.php?logout">Sign Out</a></li>
          </ul>
      </ul>


  </body>
