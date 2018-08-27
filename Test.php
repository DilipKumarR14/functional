<?php
// nclude "Utility.php";
$val=readline("1-int    2-double     3-boolean : ");
switch ($val) {
    case 1:
    intcall();
        break;
    case 2:
    doublecall();
        break;
    case 3:
    boolcall();
        break;
    default:
        echo ("enter the value 1/2/3");
        break;
    function intcall()
    {
    $r=readline("enter the row value : ");
    $c=readline("enter the col value : ");
    $int = array(array());
    echo "int called\n";
    for ($i = 0; $i < $r; $i++) {
        for ($j = 0; $j < $c; $j++) {
            $int[$i][$j] = readline("enter the element : ");
        }
    }
    print_r($int);
}
// double

function doublecall()
{
    $double = array(array());
    echo "double called\n";
    $r=readline("enter the row value : ");
    $c=readline("enter the col value : ");
    $double = array(array());
    echo "int called\n";
    for ($i = 0; $i < $r; $i++) {
        for ($j = 0; $j < $c; $j++) {
            $double[$i][$j] = readline("enter the element : ");
        }
    }
    print_r($double);
}
// boolean

function boolcall()
{
    $bool = array(array());
    echo "boolean called\n";
    $r=readline("enter the row value : ");
    $c=readline("enter the col value : ");
    $bool = array(array());
    for ($i = 0; $i < $r; $i++) {
        for ($j = 0; $j < $c; $j++) {
            $bool[$i][$j] = readline("enter the element : ");
        }
    }
    print_r($bool);
}
}
?>