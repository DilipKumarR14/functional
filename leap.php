<?php
include 'Utility.php';
//echo "enter the year : ";
$ref = new Utility();
$num = $ref->getint();
function le($num){
if(strlen($num)==4){
    if ($num %400==0 ||($num % 100 != 0 && $num % 4 == 0)) {
        echo "Leap Year\n";
    } else {
        echo "not a leap year\n";
    }
}
else{
    $num=readline("enter the 4 digit numbers \n");
    le($num);
}
}
le($num);
