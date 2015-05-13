<?php

class authController extends BaseController {
	function index($args) {
		global $_REQUEST, $args,$_SESSION;
		loadobject("user");
		loadobject("groups");
		$return=array();
		$display="";
		if(isset($_REQUEST["output"]) && trim($_REQUEST["output"])!="") {
			$output=trim($_REQUEST["output"]); 
			if($output=="no") {
				$return['output']="no";
			}
			if($output=="content") {
				$return['output']="content";
			}
		}
		$user="";
		$return['status']="";
		$return['userstatus']="user";
		if(isset($_REQUEST["uname"]) && trim($_REQUEST["uname"])!="") {
			$user=trim($_REQUEST["uname"]); 
		} else { 
			$return['status']="No username";
			return $return; 
		}
		$pass="";
		if(isset($_REQUEST["pword"]) && trim($_REQUEST["pword"])!="") {
			$pass=trim($_REQUEST["pword"]);
		} else {
			$return['status']="No password";
			return $return; 
		}
		$usermodel = new UserModel;
		$usermodel->setUsername($user);
		$userrow = $usermodel->getUserByUsername();
		if($userrow['password']==md5($pass)) {
			$_SESSION['username']=$user;
			$return['status']="success";
			$groupmodel = new GroupsModel;
			$groupmodel->setId($userrow["group"]);
			$grouprow=$groupmodel->fetchById();
			if($grouprow["groupname"]=="admin") {
				$_SESSION['privileges']="admin";
				$return['userstatus']="editor";
			}				
		} else {
			$return['status']="wrong credentials";
		}
		return $return;
	}
	function logout($args) {
		global $_SESSION,$_REQUEST;
		if(isset($_REQUEST["output"]) && trim($_REQUEST["output"])!="") {
			$output=trim($_REQUEST["output"]); 
			if($output=="no") {
				$return['output']="no";
			}
			if($output=="content") {
				$return['output']="content";
			}
		}
		unset($_SESSION['username']);
		unset($_SESSION['privileges']);
		$return['status']="logged out";
		return $return;
		}
}
