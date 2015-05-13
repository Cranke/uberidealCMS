<?php

class PostModel extends AbstractModel {
	public $dbTable = "posts";
	protected $row;
	protected $fields = array("title"=>array("type"=>"text","length"=>"128","default"=>""),"subtitle"=>array("type"=>"text","length"=>"64","default"=>""),"excerpt"=>array("type"=>"text","length"=>"64","default"=>""),"content"=>array("type"=>"textarea","length"=>"2048","default"=>""),"postdate"=>array("type"=>"datetime","length"=>"10","default"=>"0000-00-00"),"user_id"=>array("type"=>"int","length"=>"12","default"=>0),"hidden"=>array("type"=>"checkbox","length"=>"1","default"=>0));
	
    public function setTitle($value){
    	$this->row['title']=substr($value,0,$fields['title']['length']);
    }
    public function getTitle(){
    	return $this->row['title'];
    }

    public function setSubtitle($value){
    	$this->row['subtitle']=substr($value,0,$fields['subtitle']['length']);;
    }
    public function getSubtitle(){
    	return $this->row['subtitle'];
    }
 
    public function setExcerpt($value){
    	$this->row['excerpt']=substr($value,0,$fields['excerpt']['length']);;
    }
    public function getExcerpt(){
    	return $this->row['excerpt'];
    }
    public function setUserId($value){
    	$this->row['user_id']=substr($value,0,$fields['user_id']['length']);;
    }
    public function getUserId(){
    	return $this->row['user_id'];
    }
 
    public function setContent($value){
    	$this->row['content']=substr($value,0,$fields['content']['length']);;
    }
    public function getContent(){
    	return $this->row['content'];
    }
    public function setdate($value){
    	if (DateTime::createFromFormat('Y-m-d', $value)) {
    		$this->row['date']=$value;
    	}
    }
    public function getdate(){
    	return $this->row['date'];
    }

}

?>
