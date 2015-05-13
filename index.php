<?php
session_start();

ini_set('display_errors', 1);
date_default_timezone_set("Europe/Berlin");

require_once('libs/Smarty.class.php');
require_once('config.inc.php');
require_once('functions.php');

$mysqli = dbconnect();

$smarty = new Smarty();
//** un-comment the following line to show the debug console
//$smarty->debugging = true;
$smarty->setTemplateDir('templates/');
$smarty->setCompileDir('smarty/templates_c/');
$smarty->setConfigDir('smarty/configs/');
$smarty->setCacheDir('smarty/cache/');


// Get REQUEST Vars
$args = Array();
global $args;
foreach($_REQUEST as $key => $value) {
	$args[$key]=$value;
}


// SET UP ROUTING
$correctpath = false;
$computed = array();
if(isset($args['module']) && $args['module']!="" && file_exists("modules/".$args['module'])) {
	$computed['module']=$args['module'];
	$module=$args['module']; // Module exists
	} else {
	$module="default";
	$computed['module']="default";
	}

if(isset($args['controller']) && $args['controller']!="" && file_exists("modules/".$module."/".$args['controller']."Controller.php")) {
	$computed['controller']=$args['controller'];
	$controller=$args['controller']; // Controller exists 
	} else {
	$controller="index";
	$computed['controller']="index";
	}
/*
	// DEBUG Routing
	echo $args['module']."<br />";
	echo $args['controller']."<br />";
	echo "modules/".$module."/".$controller."Controller.php";
*/
// load BaseClasses
require_once("inc/AbstractModel.php");
require_once("inc/BaseController.php");
require_once("modules/".$module."/".$controller."Controller.php");

$controllerClass=$controller."Controller";
$controllerInstance = new $controllerClass;

if(isset($args['action']) && method_exists($controllerInstance, $args['action'])) {
	$action=$args['action'];
	$computed['action']=$args['action'];
	$correctpath=true;	// Action exists, path seems to be correct.
} else {
	$action="index";
	$computed['action']="index";
}

// load mappers
loadobject($module);

$return = $controllerInstance->$action($args); // Call action, get return values
$privileges="";
// RENDER TEMPLATES
if(isset($_SESSION['username'])) {
	$username = $_SESSION['username'];
	if(isset($_SESSION['privileges'])) $privileges = $_SESSION['privileges'];
} else {
	$username = "";
}

$smarty->assign("facebookapp",$facebookapp);
$smarty->assign("basepath",$basepath);
$smarty->assign("args",$args);
$smarty->assign("computed",$computed);
$smarty->assign("return",$return);
$smarty->assign("username",$username);
$smarty->assign("hostname",$hostname);
$smarty->assign("privileges",$privileges);
if(!isset($return['output'])) { $smarty->display("default/header.tpl"); }
if(!isset($return['output']) || $return['output']=="content") $smarty->display($computed['module']."/".$computed['controller']."/".$computed['action'].".tpl");
if(!isset($return['output'])) { $smarty->display("default/footer.tpl"); }
if(isset($return['output']) && $return['output']=="json") {
	$html = $smarty->fetch($computed['module']."/".$computed['controller']."/".$computed['action'].".tpl");
	echo json_encode(array("html"=>$html,"status"=>$return["status"],"userstatus"=>$return["userstatus"]), JSON_PRETTY_PRINT);
}

?>
