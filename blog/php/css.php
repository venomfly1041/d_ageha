<?php

require_once("config.php");
$cfg=new config();

$output=$cfg->pc_css;

echo "<link rel='stylesheet' type='text/css' href='".$output."'>";
?>