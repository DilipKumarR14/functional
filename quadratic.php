<?php
$a=readline("enter the value of a : ");
$b=readline("enter the value of b : ");
$c=readline("enter the value of c : ");
$delta=pow($b,2)-4*$a*$c;
$root1=(-$b+sqrt($delta))/(2*$a);
$root2=(-$b-sqrt($delta))/(2*$a);
echo "delta = " .$delta . "\n";
echo "root1 = " .$root1 . "\n";
echo "root2 = " .$root2 . "\n";
?>