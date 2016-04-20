CREATE TABLE `FinalProject`.`highscore` (
`score_id` INT(8) NOT NULL AUTO_INCREMENT PRIMARY KEY,
`scoreBy` INT(8) NOT NULL,	
`score` INT(8) NOT NULL,
UNIQUE(`score_id`),
UNIQUE(`scoreBy`)
) ENGINE = MYISAM;