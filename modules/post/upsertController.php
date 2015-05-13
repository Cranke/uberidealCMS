<?php

class editController extends BaseController {

	public function index($args) {
		$return=array();
		return $return;
	}
	function upsert($model) {
		$id = $model->upsert();
		return $id;
	}

	function delete($id) {
		$model=new PostModel;
		$model->setId($id);
		$model->delete();
	}

}

?>
