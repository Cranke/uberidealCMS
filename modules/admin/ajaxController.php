<?php
class ajaxController extends Basecontroller {

	function index($args) {
		$return['output']="no";
		checkadmin();
		return $return;
	}
	function edit($args) {
		global $smarty;
		checkadmin();
		$modelname=$args['arg1'];
		$modelid=$args['arg2'];
		loadobject($modelname);
		$modelclassname = ucfirst($modelname)."Model";
		$model = new $modelclassname;
		$model->setId($modelid);
		$return = $model->fetchById();
		setRoute("admin","ajax",$modelname);
		$return['completesite']=false;
		return $return;
	}

}
?>
