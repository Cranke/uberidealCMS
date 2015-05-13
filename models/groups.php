<?php

class GroupsModel extends AbstractModel {
	public $dbTable = "groups";
	protected $row;
	protected $fields = array("groupname"=>array("type"=>"text","length"=>"128","default"=>""),"groupvalue"=>array("type"=>"int","length"=>"3","default"=>1));

    public function setGroupname($value){
    	$this->row['groupname']=substr($value,0,$fields['groupname']['length']);
    }
    public function getGroupname(){
    	return $this->row['groupname'];
    }
    public function setGroupvalue($value){
    	$this->row['groupvalue']=substr($value,0,$fields['groupvalue']['length']);;
    }
    public function getGroupvalue(){
    	return $this->row['groupvalue'];
    }

}
?>
