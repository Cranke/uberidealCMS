<?php

class AreasModel extends AbstractModel {
	public $dbTable = "areas";
	protected $row;
	protected $fields = array("x1"=>false,"y1"=>false,"x2"=>false,"y2"=>false,"date"=>"0000-00-00");
	
    public function setX1($value){
	    $value=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
    	$this->row['x1']=$value;
    }
    public function getX1(){
    	return $this->row['x1'];
    }
 
    public function setY1($value){
	    $value=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
    	$this->row['y1']=$value;
    }
    public function getY1(){
    	return $this->row['y1'];
    }
 
    public function setX2($value){
	    $value=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
    	$this->row['x2']=$value;
    }
    public function getX2(){
    	return $this->row['x2'];
    }
 
    public function setY2($value){
	    $value=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
    	$this->row['y2']=$value;
    }
    public function getY2(){
    	return $this->row['y2'];
    }

    public function setDate($value){
    	if (DateTime::createFromFormat('Y-m-d', $value)) {
    		$this->row['date']=$value;
    	}
    }
    public function getDate(){
    	return $this->row['date'];
    }

	public function fetchAllWithPrizes($offset=1,$limit=100000) {
		global $mysqli;
		$offset=filter_var($offset, FILTER_SANITIZE_NUMBER_INT)-1;
		if($offset<0) $offset=0;
		$limit=filter_var($limit, FILTER_SANITIZE_NUMBER_INT);
		$query = "select a.*,p.* from `".$this->dbTable."` as a left join prizes as p on a.date = p.date LIMIT ".$offset.",".$limit;
		$result = $mysqli->query($query);
		$return = array();
		while($row = $result->fetch_array()) {
			$return[] = $row;
		}
		return $return;		
	}

	public function fetchAllWithPrizesToDate($date="2050-01-01",$offset=1,$limit=100000) {
		global $mysqli;
		$offset=filter_var($offset, FILTER_SANITIZE_NUMBER_INT)-1;
		if($offset<0) $offset=0;
		$limit=filter_var($limit, FILTER_SANITIZE_NUMBER_INT);
		$query = "select a.*,p.* from `".$this->dbTable."` as a left join prizes as p on a.date = p.date where p.date<= '".$date."' LIMIT ".$offset.",".$limit;
		$result = $mysqli->query($query);
		$return = array();
		while($row = $result->fetch_array()) {
			$return[] = $row;
		}
		return $return;		
	}

}

?>
