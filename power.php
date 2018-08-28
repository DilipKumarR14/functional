<?php
include 'Utility.php';
//echo "enter the range: ";
$ref=new Utility(); 
$n=$ref->getint();
$numcheck=$ref->powerdigitcheck($n);
$ref->calculatepower($numcheck);
?>