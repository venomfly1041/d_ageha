<?php

$dbh=new PDO('mysql:host=localhost;dbname=blog','user','');
$alldata=$dbh->query("select * from article order by date desc");
$data=$alldata->fetchAll();

echo <<<EOT
<html>
<head>
</head>
<body>
EOT;

foreach($data as $line){
	$url="./article/".$line[id].".html";
}
echo <<<EOT
</body>
</html>
EOT;


function testhtml(){
echo <<<EOT
<html>
<head>
<title>Test Page</title>
</head>
<body>
test page for blog system</br>
<a href="login.php">login</a>
</body>
</html>
EOT;
}
?>
