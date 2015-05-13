<?php

class indexController extends BaseController {

	public function index($args) {
		$return=array();
		return $return;
	}
	public function show($args) {
		$usermodel = new UserModel();
		$usermodel->setId($args['arg1']);
		$user = $usermodel->fetchById();
		$return[$usermodel->getDbTable()] = $user;
		return $return;
	}
	public function showAll($args) {
		$usermodel = new UserModel();
		$offset=0;
		$limit=100;
		if(isset($args['arg1'])) $offset=$args['arg1'];
		if(isset($args['arg2'])) $limit=$args['arg2'];
		$users = $usermodel->fetchAll($offset,$limit);
		$return[$usermodel->getDbTable()] = $users;
		return $return;
	}
}

?>
