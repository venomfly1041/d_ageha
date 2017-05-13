<?php
require_once("db_reader.php");
$reader=new linkbay();
?>

<html>
<?php include("header.php"); ?>

<body>
<?php $reader->output(); ?>
</body>
</html>

<?php
  //test functions will be here
?>