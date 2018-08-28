<?php

class Utility
{
    //take integer input
    public function getint()
    {
        fscanf(STDIN, '%d', $num);
        if (filter_var($num, FILTER_VALIDATE_INT)) {
            return $num;
        } else {
            return $this->getint();
        }
    }

    //check length of input > 3 or not

    public function length()
    {
        echo "enter the input : ";
        fscanf(STDIN, '%s', $input);
        if (strlen($input) >= 3) {
            return $input;
        } else {
            echo "enter the string greater than 3 characters\n ";
            return $this->length();
        }
    }

    #power check

    public function powerdigitcheck($num)
    {
        if ($num < 31) {
            return $num;
        } else {
            $num = readline("enter the power less than 31 ");
            return $this->powerdigitcheck($num);
        }
    }

    # calculating the power of $num
    public function calculatepower($n)
    {
        if ($n == 0) {
            $n++;
        }
        for ($i = 1; $i <= $n; $i++) {
            echo "power of 2^ " . $i . "= " . pow(2, $i) . "\n";
        }
    }

    #flip program

    public function flip($i)
    {
        $tail = 0;
        $head = 0;
        $t = 0;
        $h = 0;
        if ($i > 0) {
            for ($j = 0; $j < $i; $j++) {
                $k = rand(0, 10);
                // echo "k values is " . $k . "\n";
                if ($k < 5) {
                    $t++;

                } else {
                    $h++;
                }
            }
            echo "tails % = " . $a = ($t / $i) * 100;
            echo "\n";
            echo "heads % = " . $b = ($h / $i) * 100;
            echo "\n";
            echo "tails = " . $t . "\n";
            echo "heads = " . $h . "\n";

        } else {
            echo "enter the positive integer value";
            echo "\n";
        }
    }

    #calculating harmonic

    public function calculatingharmonic($num)
    {
        $sum = 0;
        if ($num > 0) {
            for ($i = 1; $i <= $num; $i++) {
                $sum += 1 / $i . "\t";
                //echo "1/". $i . "+";
            }
        } else {
            echo $num = readline("enter the number greater than zero: \n");
        }
        //$total=$num/$sum;
        echo "\nHarmonic mean " . $sum . "\n";
    }

    #calculating factors

    public function fact($n)
    {
        while ($n % 2 == 0) {
            echo 2, " ";
            $n /= 2;
        }
        for ($i = 3; $i < sqrt($n); $i++) {
            while ($n / $i == 0) {
                echo $i, "\t ";
                $n /= $i;
            }
        }
        if ($n > 2) {
            echo $n, " ";
        }
    }

    #2dArray
    function intcheck()
    {
        if (!filter_var($num, FILTER_VALIDATE_INT) === false) {
            echo("Integer is valid");
        } else {
            echo("Integer is not valid");
        }
    }
    public function intcall()
    {
        $ref=new Utility();
         echo ("enter the row value : ");
         $r=$this->intcheck();
         echo ("enter the col value : ");
         $c=$this->intcheck();
        $items = array(array());
        echo "int called \n";
        echo ("enter the value : ");
            for ($i = 0; $i < $r; $i++) {
                for ($j = 0; $j < $c; $j++) {
                    $items[$i][$j] = $ref->getint();
                }
            }
        print_r($items);
    }
// double
    function doublecheck()
    {
        echo "Enter the inputdo : ";

        fscanf(STDIN, '%f', $num);
        $d=$num;
        if (is_double($d)) {
            return $num;
        } else {
            return $this->doublecheck();
        }
    }

    public function doublecall()
    {
        $ref=new Utility();
        $items = array(array());
        echo "double called\n";
        $r = readline("enter the row value : ");
        $c = readline("enter the col value : ");
        $items = array(array());
        echo "double called\n";
        for ($i = 0; $i < $r; $i++) {
            for ($j = 0; $j < $c; $j++) {
                $items[$i][$j] = $ref->doublecheck();
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
        echo "boolean called\n";
        for ($i = 0; $i < $r; $i++) {
            for ($j = 0; $j < $c; $j++) {
                $items[$i][$j] = readline("enter the element : ");
            }
        }
        print_r($items);
    }

#coupon program
    public function coupon($n, $a1)
    {

        for ($i = 0; $i < $n; $i++) {
            $r = rand();
            if ($i == 0) {
                $a1[0] = $r;
            } else {
                $j = $i;
                for ($k = 0; $k < $j; $k++) {
                    if ($a1[$k] == $r) {#check element is equal or not 
                        $i--;
                        break;
                    }
                }
                #if element is not equal
                if ($j >= $i) {
                    $a1[$i] = $r;
                }

            }
        }
        for ($i = 0; $i < count($a1); $i++) {
            echo $a1[$i] . "\n";
        }
        print_r($a1);
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
        } else {
            echo ("enter the positive int value\n");
        }

    }
#permutation

    public function permute($str, $start, $end)
    {
        $ref = new Utility();

        if ($start == $end) {
            echo $str . "\n";
        } else {
            for ($i = $start; $i <= $end; $i++) {
                $str = $ref->swap($str, $start, $i);
                $this->permute($str, $start + 1, $end);
                $str = $ref->swap($str, $start, $i);
            }
        }
    }
    public function swap($a, $i, $j)
    {
        $temp;
        $charArray = str_split($a);
        $temp = $charArray[$i];
        $charArray[$i] = $charArray[$j];
        $charArray[$j] = $temp;
        return implode($charArray);
    }

#timer

    public function timer()
    {
        echo ("enter 1 to start : ");
        $input =$this->getint(); 
        
        if ($input == 1 && filter_var($input, FILTER_VALIDATE_INT)) {
            echo "timer started \n";
            $start = microtime();
            //echo $start . "\n";
            echo ("enter 2 to stop : ");
            $input = $this->getint();
            if ($input == 2 && filter_var($input, FILTER_VALIDATE_INT)) {
                $stop = microtime();
                //  echo $stop . "\n";
                echo "timer stopped \n";
                echo abs($stop - $start) . "\n";
            } else {
                echo "entered wrong number\n";
            }
        } else {
            echo "entered wrong number\n";
        }
    }

#main ends
}
