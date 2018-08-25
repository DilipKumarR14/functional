<?php
include 'Utility.php';
echo "enter the range: ";
$ref=new Utility(); 
$n=$ref->getint();
if($n==0)
{
    $n++;
}
for ($i=1;$i<$n;$i++)
    {
         echo "power of 2^ ".$i."= ".pow(2,$i)."\n";        
    }
?>