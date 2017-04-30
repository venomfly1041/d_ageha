<?php

require("header.php");

$dbh=new PDO('mysql:host=localhost;dbname=blog','user','');
$alldata=$dbh->query("select * from article order by date desc");
$data=$alldata->fetchAll();
?>

<html>
<?php header(); ?>

<body>
test page
<?php
foreach($data as $line){
	$url="./article/".$line[id].".html";
}
?>

</body>
</html>

<?php
  //test functions will be here
?>