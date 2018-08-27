<?php

class Utility
{
    //take integer input
    public function getint()
    {
        echo "Enter the input: ";

        fscanf(STDIN, '%d', $num);
        if (filter_var($num, FILTER_VALIDATE_INT)) {

            return $num;
        } else {
            return $this->getint();
        }
    }
    #2dArray

    public function intcall()
    {
        $r = readline("enter the row value : ");
        $c = readline("enter the col value : ");
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

    public function doublecall()
    {
        $items = array(array());
        echo "double called\n";
        $r = readline("enter the row value : ");
        $c = readline("enter the col value : ");
        $items = array(array());
        echo "int called\n";
        for ($i = 0; $i < $r; $i++) {
            for ($j = 0; $j < $c; $j++) {
                $items[$i][$j] = readline("enter the element : ");
            }
        }
        print_r($items);
    }
// boolean

    public function boolcall()
    {
        $items = array(array());
        echo "boolean called\n";
        $r = readline("enter the row value : ");
        $c = readline("enter the col value : ");
        $items = array(array());
        echo "int called\n";
        for ($i = 0; $i < $r; $i++) {
            for ($j = 0; $j < $c; $j++) {
                $items[$i][$j] = readline("enter the element : ");
            }
        }
        print_r($items);
    }

#coupon program
    public function coupon()
    {
        $arr = array();

        for ($i = 0; $i < 5; $i++) {
            if ($i == 0) {
                $arr[$i] = rand(1, 50);
            } else {
                $r = rand(1, 50);
                $ref = new Utility();

                $n = $this->check($arr, $r);
                $arr[$i] = $n;
            }
        }
        print_r($arr);
        echo "\n";
    }
    public function check($arr, $r)
    {
        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] != $r) {
                return $r;
            } else {
                if (rand(1, 50) == $r) {
                    check($arr, $r);
                }
            }
        }
    }
    #sumzero-10

    public function tripleszero($arr, $n)
    {
        $count = 0;
        for ($i = 0; $i < $n - 2; $i++) {
            for ($j = $i + 1; $j < $n - 1; $j++) {
                for ($k = $j + 1; $k < $n; $k++) {
                    if ($arr[$i] + $arr[$j] + $arr[$k] == 0) {
                        echo "distinct triplets  ";
                        echo $arr[$i], " ", $arr[$j], " ", $arr[$k], "\n";
                        $count++;
                    }
                }
            }
        }
        echo "count =  " . " " . $count . "\n";
    }
#euclid

    public function euclid($x, $y)
    {
        $x = abs($x);
        $y = abs($y);
        if (is_int($x) && is_int($y)) {
            if ($x > 0 && $y > 0) {
                $value = sqrt(pow($x, 2) + pow($y, 2));
                echo ("the value of " . $x . "," . $y . " = " . $value . "\n");
            } else {
                echo ("enter the positive value \n");
            }
        }
        else{
            echo ("enter the positive int value\n");
        }

    }
#permutation

function permute($str, $start, $end)
{
    $ref=new Utility();

    if ($start == $end)
        echo $str. "\n";
    else
    {
        for ($i = $start; $i <= $end; $i++)
        {
            $str = $ref->swap($str, $start, $i);
            $this->permute($str, $start + 1, $end);
            $str = $ref->swap($str, $start, $i);
        }
    }
}
function swap($a, $i, $j)
{
    $temp;
    $charArray = str_split($a);
    $temp = $charArray[$i] ;
    $charArray[$i] = $charArray[$j];
    $charArray[$j] = $temp;
    return implode($charArray);
}

#main ends
}
