<?php
include "Utility.php";
$ref=new Utility();
echo "enter x/y value : " . "\n";
    $x=input();
	$y=input();
	function input()
    {
        fscanf(STDIN,"%d",$value);
        return $value;
    }
$ref->euclid($x,$y);
?>