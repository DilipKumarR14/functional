<?php
include 'Utility.php';
$ref=new Utility();
$num=$ref->getint();
 $sum=0;
if($num>0)
{
for($i=1;$i<=$num;$i++)
{
 echo "1/".$i."+";
 $sum+=1/$i . "\t";
}
//echo $sum;
}

else{
    echo $num=readline("enter the number greater than zero: \n");
}
//$total=$num/$sum;
echo "\nHarmonic mean ".$sum."\n";
?>