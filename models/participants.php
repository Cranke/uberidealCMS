<?php

class ParticipantsModel extends AbstractModel {
	public $dbTable = "participants";
	protected $row = array();
	protected $fields = array("firstname"=>array("type"=>"text","length"=>"32","default"=>""),"lastname"=>array("type"=>"text","length"=>"32","default"=>""),"email"=>array("type"=>"text","length"=>"128","default"=>""),"value"=>array("type"=>"text","length"=>"128","default"=>""),"activationcode"=>array("type"=>"text","length"=>"32","default"=>""),"activated"=>array("type"=>"checkbox","length"=>"1","default"=>0),"hidden"=>array("type"=>"checkbox","length"=>"1","default"=>0),"date"=>array("type"=>"date","length"=>"10","default"=>"0000-00-00"));
	
    public function setEmail($value){
	    $value=filter_var($value, FILTER_SANITIZE_EMAIL);
    	$this->row['email']=$value;
    }
    public function getEmail(){
    	return $this->row['email'];
    }
 
    public function setFirstname($value){
	    $value=filter_var($id, FILTER_SANITIZE_STRING);
    	$this->row['firstname']=$value;
    }
    public function getFirstname(){
    	return $this->row['firstname'];
    }
 
    public function setLastname($value){
	    $value=filter_var($value, FILTER_SANITIZE_STRING);
    	$this->row['lastname']=$value;
    }
    public function getLastname(){
    	return $this->row['lastname'];
    }
    public function setAnswer($value){
	    $value=filter_var($value, FILTER_SANITIZE_STRING);
    	$this->row['answer']=$value;
    }
    public function getAnswer(){
    	return $this->row['answer'];
    }
    public function setActivationcode($value){
	    $value=filter_var($value, FILTER_SANITIZE_STRING);
    	$this->row['activationcode']=$value;
    }
    public function getActivationcode(){
    	return $this->row['activationcode'];
    }
    public function setActivated($value){
	    $value=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
    	$this->row['activated']=$value;
    }
    public function getActivated(){
    	return $this->row['activated'];
    }
    public function setDate($value){
    	if (DateTime::createFromFormat('Y-m-d', $value)) {
    		$this->row['date']=$value;
    	}
    }
    public function getDate(){
    	return $this->row['date'];
    }

	public function getUserByEmail() {
		global $mysqli;
		$email=$this->getEmail();
		$query = "select * from `".$this->dbTable."` where email='".$email."'";
		$result = $mysqli->query($query);
		$return = $result->fetch_array();
		return $return;
	}
	public function fetchByEmailAndDate() {
		global $mysqli;
		$email=$this->getEmail();
		$date=$this->getDate();
		$query = "select * from `".$this->dbTable."` where email='".$email."' AND date='".$date."'";
		$result = $mysqli->query($query);
		$return = $result->fetch_array();
		return $return;
	}
	public function activate() {
		global $mysqli;
		$code=$this->getActivationcode();
    	$code = $mysqli->real_escape_string($code);
		$query = "select * from `".$this->dbTable."` where activationcode='".$code."'";
		$result = $mysqli->query($query);
		$return = $result->fetch_array();
    	if(!empty($return)) {
			$query = "select * from `".$this->dbTable."` where activationcode='".$code."' and activated=1";
			$result = $mysqli->query($query);
			$return = $result->fetch_array();
			if(empty($return)) {
				$query = "update `".$this->dbTable."` set activated='1' where activationcode='".$code."'";
				$result = $mysqli->query($query);
				$return="Sie haben Ihre E-Mail-Adresse erfolgreich aktiviert.";
			} else {
				$return="Sie haben Ihre E-Mail-Adresse bereits aktiviert.";
			}
		} else {
			$return="Der Aktivierungscode wurde nicht gefunden.";
		}
		return $return;
	}


}

?>
