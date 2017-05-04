<?php

require("article.php");

class linkbay extends article{

  public function readDB($db){
    $data=$db->query("select * from article order by date desc");
    return $data->fetchAll(PDO::FETCH_ASSOC);
  }

  public function output(){
    $db=new PDO("mysql:host=localhost;dbname=blog","user","");
    $array=$this->readDB(&$db);
    foreach($array as $d){


    }
    $db=NULL;
  }

}

?>