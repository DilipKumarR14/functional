<?php

$t=readline("enter the temperarture value in Fahrenheit : ");
$v=readline("enter the wind speed in miles per hour : ");
if($t<50 &&($v>3|| $v<120))
{
$wind=35.74+0.6215*$t+(0.4275*$t-35.75)*pow($v,0.16);
echo $wind;
}

?>