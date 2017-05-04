<?php
require("linkbay.php");
require("config.php");
$reader=new linkbay();
$cfg=new config();
?>

<html>
<?php include("header.php"); ?>

<body>
test page
<?php $reader->output(); ?>

</body>
</html>

<?php
  //test functions will be here
?>