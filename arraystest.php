<?php
include "Utility.php";
$ref=new Utility();
$val=readline("1- int 2-double 3-boolean : ");
switch ($val) {
    case 1:
        $ref->intcall();
        break;
    case 2:
    $ref->doublecall();
        break;
    case 3:
    $ref->boolcall();
        break;
    default:
        echo ("enter the value 1/2/3");
        break;
}