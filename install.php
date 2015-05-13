<?php

require_once('config.inc.php');

$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$query="CREATE TABLE IF NOT EXISTS `participants` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `email` varchar(128) NOT NULL,
  `answer` varchar(256) NOT NULL,
  `date` date NOT NULL,
  `activationcode` varchar(32) NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '0',
  `hidden` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;";
$mysqli->query($query);

$query="create table user (id int(12) NOT NULL AUTO_INCREMENT, username varchar(32) NOT NULL, password varchar(64) NOT NULL, firstname varchar(128),lastname varchar(128),lastmodified TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,`hidden` tinyint(1) NOT NULL DEFAULT '0',PRIMARY KEY (id))";
$mysqli->query($query);

$query="create table posts (id int(12) NOT NULL AUTO_INCREMENT, title varchar(255) NOT NULL, subtitle varchar(255) NOT NULL, excerpt varchar(255) NOT NULL, content TEXT NOT NULL, postdate DATETIME, author_id int(12) NOT NULL, lastmodified TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,`hidden` tinyint(1) NOT NULL DEFAULT '0',PRIMARY KEY (id))";
$mysqli->query($query);

?>
