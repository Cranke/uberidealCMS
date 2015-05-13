<?php
class AbstractModel {

	public function getDbTable() {
		return $this->dbTable;
	}
	public function __set($name, $value) {
		$this->row[$name] = $value;
	}
    public function __get($name) {
    	return $this->row[$name];
    }
    public function setId($value) {
    	$this->row['id']=$value;
    }
    public function getId() {
    	return $this->row['id'];
    }
	public function fetchById() {
		global $mysqli;
		$id=$this->getId();
		$query = "select * from `".$this->dbTable."` where id='".$id."'";
		$result = $mysqli->query($query);
		$return = $result->fetch_array();
		return $return;
	}

	public function fetchAll($offset=1,$limit=100000,$order="id DESC") {
		global $mysqli;
		$offset=filter_var($offset, FILTER_SANITIZE_NUMBER_INT)-1;
		if($offset<0) $offset=0;
		$limit=filter_var($limit, FILTER_SANITIZE_NUMBER_INT);
		$query = "select * from `".$this->dbTable."` ORDER BY ".$order." LIMIT ".$offset.",".$limit;
		$result = $mysqli->query($query);
		$return = array();
		while($row = $result->fetch_array()) {
			$return[] = $row;
		}
		return $return;		
	}

	public function upsert() {
		global $mysqli;
		if($this->id==false) {
			// Insert new item
			$query="insert into `".$this->dbTable."` (";
			foreach($this->fields as $field=>$value) {
				$query.=$field.",";
			}
			$query.="created) values (";
			foreach($this->fields as $field=>$value) {
				$stripvalue = $mysqli->real_escape_string($this->row[$field]);
				$query.="'".$stripvalue."',";
			}
			$query.="'".date("Y-m-d H:i:s")."'";
			$query.=")";
			$result = $mysqli->query($query);
		} else {
			// Update old item
			$query="update ".$this->dbTable." set ";
			foreach($this->fields as $field=>$value) {
				$stripvalue = $mysqli->real_escape_string($this->row[$field]);
				$query.="`".$field."`='".$stripvalue."',";
			}
			$query=substr($query,0,-1);
			$query.=") where id=".$this->id;
			$result = $mysqli->query($query);
		}
		return;
	}
	public function hide() {
		if($this->id) {
			$query="update ".$this->dbTable." set hidden=1 where id=".$this->id;
			$result = $mysqli->query($query);
		}
	}
	public function delete() {
		if($this->id) {
			$query="delete from ".$this->dbTable." where id=".$this->id;
			$result = $mysqli->query($query);
		}
	}

}
?>
