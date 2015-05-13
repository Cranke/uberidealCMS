<?php

class PrizesModel extends AbstractModel {
	public $dbTable = "prizes";
	protected $row;
	protected $fields = array("isImage"=>0,"title"=>false,"frage"=>false,"antwort"=>false,"url"=>false,"date"=>"0000-00-00");
	
    public function setIsImage($value){
	    $value=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
    	$this->row['isImage']=$value;
    }
    public function getIsImage(){
    	return $this->row['isImage'];
    }
    public function setTitle($value){
	    $value=filter_var($value, FILTER_SANITIZE_STRING);
    	$this->row['title']=$value;
    }
    public function getTitle(){
    	return $this->row['title'];
    }
 
    public function setFrage($value){
	    $value=filter_var($value, FILTER_SANITIZE_STRING);
    	$this->row['frage']=$value;
    }
    public function getFrage(){
    	return $this->row['frage'];
    }
 
    public function setAntwort($value){
 	    $value=filter_var($value, FILTER_SANITIZE_STRING);
   	$this->row['antwort']=$value;
    }
    public function getAntwort(){
    	return $this->row['antwort'];
    }
 
    public function setUrl($value){
    	$this->row['url']=$value;
    }
    public function getUrl(){
    	return $this->row['url'];
    }

    public function setdate($value){
    	if (DateTime::createFromFormat('Y-m-d', $value)) {
    		$this->row['date']=$value;
    	}
    }
    public function getdate(){
    	return $this->row['date'];
    }
	public function fetchByDate() {
		global $mysqli;
		$date=$this->getDate();
		$query = "select * from `".$this->dbTable."` where date='".$date."'";
		$result = $mysqli->query($query);
		$return = $result->fetch_array();
		return $return;
	}


}

?>
