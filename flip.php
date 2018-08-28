<?php
include 'Utility.php';
$obj=new Utility();
echo "Enter the input: ";
$i=$obj->getint();
$obj->flip($i);
?>
