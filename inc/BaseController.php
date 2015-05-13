<?php
class BaseController {
	protected $sitetitle = "";

    public function setSitetitle($value) {
    	$this->sitetitle=$value;
    }
    public function getSitetitle() {
    	return $this->sitetitle;
    }

}
?>
