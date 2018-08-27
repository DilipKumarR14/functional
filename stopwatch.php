
<?php
$input=readline("enter 1 to start : ");
if($input==1)
{
    echo "timer started \n";
    $start=microtime();
    $input=readline("enter 2 to stop : ");
    if($input==2)
    {
        $stop=microtime();
        echo "timer stopped \n";
        echo $stop-$start . "\n" ;
    }
    else
    {
        echo "entered wrong number\n";
    }
}
else
    {
        echo "entered wrong number\n";
    }
?>