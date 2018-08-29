<?php
 intcall();
 function intcheck()
 {
        fscanf(STDIN, '%f', $int);
        if (filter_var($int, FILTER_VALIDATE_INT))
         {
           return $int;
         }
         else{
             echo "enter the int value : \n";
             intcall();
         }
 }
function intcall()
{
    echo("enter the row value : ");
    $r=intcheck();
    echo("enter the col value : ");
    $c=intcheck();
    
    $items = array(array());
    echo "enter the value : \n";
    for ($i = 0; $i < $r; $i++) {
        for ($j = 0; $j < $c; $j++) {
            $items[$i][$j] = intcheck();
        }
    }
    print_r($items);
}

?>