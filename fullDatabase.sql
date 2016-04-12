CREATE DATABASE `FinalProject` ;

CREATE TABLE `FinalProject`.`users` (
`user_id` INT(8) NOT NULL AUTO_INCREMENT PRIMARY KEY,
`username` VARCHAR(16) NOT NULL,
`email` VARCHAR(32) NOT NULL,
`password` VARCHAR(64) NOT NULL,
UNIQUE (`email`),
UNIQUE (`username`)
) ENGINE = MYISAM;

CREATE TABLE `FinalProject`.`categories` (
`cat_id` INT(8) NOT NULL AUTO_INCREMENT PRIMARY KEY,
`cat_name` VARCHAR(128) NOT NULL,
`cat_description` VARCHAR(255) NOT NULL,
UNIQUE (`cat_name`)
) ENGINE = MYISAM;

CREATE TABLE `FinalProject`.`topics` (
`topic_id` INT(8) NOT NULL AUTO_INCREMENT PRIMARY KEY,
`topic_subject` VARCHAR(255) NOT NULL,
`topic_date` DATETIME NOT NULL,
`topic_cat` INT(8) NOT NULL,
`topic_by` INT(16) NOT NULL,
UNIQUE (`topic_id`)
) ENGINE = MYISAM;

CREATE TABLE `FinalProject`.`posts` (
`post_id` INT(8) NOT NULL AUTO_INCREMENT PRIMARY KEY,
`post_content` TEXT NOT NULL,
`post_date` DATETIME NOT NULL,
`post_topic` INT(16) NOT NULL,
`post_by` INT(16) NOT NULL,
UNIQUE (`post_id`)
) ENGINE = MYISAM;
