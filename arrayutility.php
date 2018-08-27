<?php
function intcall()
{
    $r=readline("enter the row value : ");
    $c=readline("enter the col value : ");
    $items = array(array());
    echo "int called\n";
    for ($i = 0; $i < $r; $i++) {
        for ($j = 0; $j < $c; $j++) {
            $items[$i][$j] = readline("enter the element : ");
        }
    }
    print_r($items);
}
// double

function doublecall()
{
    $items = array(array());
    echo "double called\n";
    for ($i = 0; $i < 2; $i++) {
        for ($j = 0; $j < 2; $j++) {
            $items[$i][$j] = readline("enter the element : ");
        }
    }
    print_r($items);
}
// boolean

function boolcall()
{
    $items = array(array());
    echo "boolean called\n";
    for ($i = 0; $i < 2; $i++) {
        for ($j = 0; $j < 2; $j++) {
            $items[$i][$j] = readline("enter the element : ");
        }
    }
    print_r($items);
}
?>