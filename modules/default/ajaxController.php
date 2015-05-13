<?php
class ajaxController extends BaseController {

	public function index($args) {
		$return = array();
		return $return;
	}
	public function update($args) {
		global $_REQUEST,$mysqli;
		checkadmin();
		$return['output']="no";
		if(isset($_REQUEST['value'])) $value=$_REQUEST['value']; else $value="";
		if(isset($_REQUEST['field'])) $fields=explode(".",$_REQUEST['field']);
		$table=$fields[0];
		$id=$fields[1];
		$field=$fields[2];
		$query="update ".$mysqli->real_escape_string($table)." set `".$mysqli->real_escape_string($field)."`='".$mysqli->real_escape_string($value)."' where id='".$mysqli->real_escape_string($id)."'";
		$mysqli->query($query);
		$output="changed";
		echo $output;
		return $return;		
	}

}
?>
