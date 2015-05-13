<?php

class UserModel extends Abstractmodel {
	public $dbTable = "user";
	protected $row;
	protected $fields = array("username"=>array("type"=>"varchar","length"=>"32","default"=>""),"password"=>array("type"=>"varchar","length"=>"32","default"=>""),"firstname"=>array("type"=>"varchar","length"=>"32","default"=>""),"lastname"=>array("type"=>"varchar","length"=>"32","default"=>""),"email"=>array("type"=>"varchar","length"=>"128","default"=>""),"activationcode"=>array("type"=>"varchar","length"=>"32","default"=>""),"activated"=>array("type"=>"int","length"=>"1","default"=>0),"hidden"=>array("type"=>"checkbox","length"=>"1","default"=>0),"group"=>array("type"=>"int","length"=>"3","default"=>0));
	
    public function setUsername($value){
	    $value=filter_var($value, FILTER_SANITIZE_STRING);
    	$this->row['username']=$value;
    }
    public function getUsername(){
    	return $this->row['username'];
    }
 
    public function setPassword($value){
	    $value=filter_var($value, FILTER_SANITIZE_STRING);
    	$this->row['password']=md5($value);
    }
    public function getPassword(){
    	return $this->row['password'];
    }
 
    public function setFirstname($value){
	    $value=filter_var($value, FILTER_SANITIZE_STRING);
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
    public function setIsAdmin($value){
	    $value=filter_var($value, FILTER_SANITIZE_NUMBER_INT);
    	$this->row['isadmin']=$value;
    }
    public function getIsAdmin(){
    	return $this->row['isadmin'];
    }
	public function getUserByUsername() {
		global $mysqli;
		$username=$this->getUsername();
		$query = "select * from `".$this->dbTable."` where username='".$username."'";
		$result = $mysqli->query($query);
		$return = $result->fetch_array();
		return $return;
	}
}

?>
