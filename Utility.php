<?php

class Utility
{
    //take integer input
    function getint()
    {
        //echo "Enter the input: ";

        fscanf(STDIN, '%d', $num);
        if (filter_var($num, FILTER_VALIDATE_INT)) {

            return $num;
        } else 
        {
            return  $this->getint();
        }

    }
}
