<?php
require_once("config.php");

class db_reader{

  function __construct(){
    $data = getenv('REQUEST_URI');
    $data=explode('/',$data);
    $this->url_query=array_filter($data,"strlen");
    $this->url_length=count($this->url_query);

    $this->cfg=new config();
    //creating stupid variable which shows right element number.
    $this->num=explode("/",$this->cfg->base_dir);
    $this->num=array_filter($this->num,"strlen");
    $this->num=count($this->num);
    //end
  
  }

  public function readDB($db){

    
    if($this->url_length==$this->num){
      $data=$this->readDB_default(&$db);
    }
    else{

      switch($this->url_query[$this->num+1]){

      case $this->cfg->date_path:
	$data=$this->readDB_date(&$db);
	break;

      case $this->cfg->tag_path:
	break;

      case $this->cfg->category_path:
	break;

      default:
	return NULL;
      }
    }

    if($data!=false){
      return $data->execute();
    }
    else{
      return NULL;
    }

  }

  public function output(){
    $db=new PDO("mysql:host=".$this->cfg->db_host.";dbname=".$this->cfg->db_name,$this->cfg->db_user,$this->cfg->db_pass);
    $array=$this->readDB(&$db);

    if($array!=NULL){
      foreach($array as $d){

      }
    }
    else{
      echo "File Not Found";
    }

    $db=NULL;
  }

  public function readDB_default($db){
    return $db->query("select * from article order by date desc");
  }

  public function readDB_date($db){

	if($this->url_length==$num+2){
	  $year=$this->url_query[$num+2];
	  $data= $db->prepare("select *,YEAR(date) as year from article where year=:year order by date desc");
	  $data->bindParam(':year', $year, PDO::PARAM_INT);
	}

	else if($this->url_length==$num+3){
	  $data=$db->prepare("select *,YEAR(date) as year,DATE(date)".
			     " as day from article where year=:year,day=:day order by date desc");
	  $year=$this->url_query[$num+2];
	  $day=$this->url_query[$num+3];

	  $data->bindParam(':year',$year,PDO::PARAM_INT);
	  $data->bindParam(':day',$day,PDO::PARAM_INT);
	}
	else if($this->url_length==$num+1){
	  return NULL;
	}

	return $data;
  }

  public $url_query;
  public $url_length;
  public $url_num;
  public $cfg;
}

?>