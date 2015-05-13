<?php
class errorController extends BaseController {

	public function index($args) {
		$return['error']="an error occured.";
		return $return;
	}
	public function output($args) {
		if($args["arg1"]=="404") {
			$return['sitetitle'] = "Error 404";
			$return['error']="404 - Site not found.";
			} else {
			$return['sitetitle'] = "Error";
			$return['error']=$args["arg1"];
			}	
		return $return;
	}

}
?>
