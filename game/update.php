<?php 
	include_once 'need/dbconnect.php';
	include_once 'need/usersession.php';
	echo "\n\n\n\n\n\n\n\n**********************\n";
	$user = $_POST['score_id'];
	echo $user;
	//mysql_query('INSERT INTO highscore'.'(score,scoreBy)'.'VALUES ( 1000, '. $user . ')'); 
	//mysql_query('INSERT INTO highscore'.'(score)'.'VALUES (1000)'); 
	//mysql_query("UPDATE highscore SET score = " . 0 . " WHERE scoreBy = " . $_SESSION['user']); 
	
	//check if _SESSION['user'] exists
	
	

	
		//mysql_query("INSERT INTO highscore(username, score) VALUES('" . $userRow['username'] . "," . 1 .")");
		if(mysql_query('INSERT INTO highscore'.'(score,scoreBy)'.'VALUES ( 1, '. $user . ')')){
			//insert
			//mysql_query('INSERT INTO highscore'.'(score,scoreBy)'.'VALUES ( 1, '. $_SESSION['user'] . ')');
		}

	
		else{
			//update
			mysql_query("UPDATE highscore SET score = score + 1");
			 $updatedScore = mysql_query("SELECT score FROM highscore WHERE scoreBy=" . $_SESSION['user']);
			$updatedScore++;
			mysql_query ('UPDATE highscore'.'SET score = '. $updatedScore .'WHERE scoreBy = ' .  $_SESSION['user']);
		}
		//mysql_query("INSERT INTO highscore(score,scoreBy) VALUES('" . 1 . "," . $_SESSION['user'] . "')");
		
		//GOOD ONEmysql_query('INSERT INTO highscore'.'(score,scoreBy)'.'VALUES ( 1, '. $_SESSION['user'] . ')');
		
		//mysql_query("INSERT INTO highscore(score) VALUES('" . 1 . "')"); 
		$number=3456;
?>