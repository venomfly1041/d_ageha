<?php

require("header.php");
require("fabicon.php");

$dbh=new PDO('mysql:host=localhost;dbname=blog','user','');
$alldata=$dbh->query("select * from article order by date desc");
$data=$alldata->fetchAll();


foreach($data as $line){
	$url="./article/".$line[id].".html";
}

?>

<?php
  //test functions will be here
?>