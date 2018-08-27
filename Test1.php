<?php
function coup($n, $a)
{
    for ($i = 0; $i < $n; $i++) {
        $d = rand(1,5);
        if ($i == 0) {
            $a1[0] = $d;
        } else {
            $j = $i;
            $k = 0;
            while( $k < $i)
            { 
                if ($a1[$k] == $d) {
                    $i--;
                    break;
                }
                $k++;
            }
             if ($k >= $j) {
                $a1[$i] = $d;
            }
        }
    }
    for ($i = 0; $i < count($a1); $i++) {
        echo $a1[$i] . "\n";
    }
    print_r($a1);
}
$arr=array();
coup(5,$arr);
?>