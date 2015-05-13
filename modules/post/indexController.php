<?php

class indexController extends BaseController {

	public function index($args) {
		$return=array();
		return $return;
	}
	public function show($args) {
		$postmodel = new PostModel;
		$postmodel->setId($args['arg1']);
		$post = $postmodel->fetchById();
		$return[$postmodel->getDbTable()] = $post;
		return $return;
	}
	public function showAll($args) {
		$postmodel = new PostModel;
		$offset=0;
		$limit=100;
		if(isset($args['arg1'])) $offset=$args['arg1'];
		if(isset($args['arg2'])) $limit=$args['arg2'];
		$posts = $postmodel->fetchAll($offset,$limit);
		$return[$postmodel->getDbTable()] = $posts;
		return $return;
	}
}
?>
