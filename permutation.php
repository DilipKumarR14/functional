<?php
//$s=microtime();

include "Utility.php";

$str=readline("enter the string : ");
$length = strlen($str);
$ref=new Utility();
$ref->permute($str, 0, $length - 1);

//$t=microtime();

//echo "\n elapsed " . abs($t-$s);
?>       