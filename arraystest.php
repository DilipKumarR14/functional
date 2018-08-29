<?php
include "Utility.php";
$ref=new Utility();
echo("1- int 2-double 3-string : ");
$val=$ref->getint();
switch ($val) {
    case 1:
        $ref->intcall();
        break;
    case 2:
    $ref->doublecall();
        break;
    case 3:
    $ref->stringcall();
        break;
    default:
        echo ("enter the value 1/2/3");

        break; 
}