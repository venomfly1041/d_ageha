<?php

class linkbay{

  function __construct(){
    $this -> query =explode('/', getenv('REQUEST_URI'));
  }

  public function readDB($db){
    $data=$db->query("select * from article order by date desc");
    return $data->fetchAll(PDO::FETCH_ASSOC);
    $data=NULL;
  }

  public function output(){
    $db=new PDO("mysql:host=localhost;dbname=blog","user","");
    $array=$this->readDB(&$db);
    foreach($array as $d){

    }
    var_dump($this->query);
    $db=NULL;
  }

  public $query;
}

?>