<?php

function dbconnect() {
	global $dbhost, $dbuser, $dbpass, $dbname;
	$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	$mysqli->set_charset("utf8");
	return $mysqli;
}

function loadobject($object) {
	if(file_exists("models/".$object.".php")) {
		include_once("models/".$object.".php");
	}
}
function setRoute($module,$controller,$action) {
	global $computed;
	$computed['module']=$module;
	$computed['controller']=$controller;
	$computed['action']=$action;
}
function loadTemplate($template) {
	global $smarty;
	$smarty->display($template);
}
function checkadmin() {
	global $_SESSION;
	if(!isset($_SESSION['username']) || !isset($_SESSION['privileges']) || $_SESSION['username']=="" || $_SESSION['privileges']!="admin") die("security error"); 
}
?>
