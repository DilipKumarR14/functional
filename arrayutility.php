<?php
 intcall();
 function intcheck()
 {
        fscanf(STDIN, '%d', $num);
        if (filter_var($num, FILTER_VALIDATE_FLOAT))
         {
           echo "enter the integer value : ";
        } 
        else if(filter_var($num, FILTER_VALIDATE_INT))
         {
             return $num;
        }
 }
function intcall()
{
    echo("enter the row value : ");
    $r=intcheck();
    if(is_float($r))
    {
        echo "enter the int value : ";
    }
    echo("enter the col value : ");
    $c=intcheck();
    
    $items = array(array());
    echo "int called\n";
    for ($i = 0; $i < $r; $i++) {
        for ($j = 0; $j < $c; $j++) {
            $items[$i][$j] = readline("enter the element : ");
        }
    }
    print_r($items);
}

?>