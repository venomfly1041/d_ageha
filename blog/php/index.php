<?php

require("linkbay.php");
$reader=new linkbay();

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