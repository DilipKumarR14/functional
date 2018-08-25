<?php
include 'Utility.php';
$ref=new Utility();
echo "ENter the stake ";
$stake=$ref->getint();
echo "ENter the goal ";
$goal=$ref->getint();
echo "ENter the no_of_times ";
$nooftimes=$ref->getint();
$bet=1;
$won=0;
$loss=0;
$i=0;
$cash=$stake;
    while ($i<$nooftimes &&$cash > 0 && $cash < $goal) 
    {
        $r=rand(1,10);
        if($r<=5)
        {
            $loss++;
            $cash--;
        }  
        else
        {
            $won++;
            $cash++;
        }
        $i++;
    }       
echo $won . "\n";
echo $loss . "\n";
echo $nooftimes . "\n";
echo "won : " ,($won/$nooftimes)*100 . "\n";
echo "loss: ", ($loss/$nooftimes)*100 . "\n";   
?>
