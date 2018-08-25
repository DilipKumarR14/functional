<?php
include 'Utility.php';
 echo "enter the year : ";
 $ref=new Utility(); 
 $num=$ref->getint();
 if($num%4==0)
 {
     if($num%100!=0 || $num%400==0)
     echo "Leap Year\n";
 }
 else
 {
     echo "not a leap year\n";
 }
?>