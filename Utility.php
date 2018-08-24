<?php

class Utility
{
    //take integer input
    function getint()
    {

        fscanf(STDIN, '%d', $num);
        if (filter_var($num, FILTER_VALIDATE_INT)) {

            return $num;
        } else 
        {
            echo "enter the int value \n";
            return  $this->getint();
        }

    }
}
