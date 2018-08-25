<?php
include 'Utility.php';
$ref=new Utility();
fact($ref->getint());
function fact($n)
{
while($n%2==0)
{
    echo 2," ";
    $n/=2;
}
for($i=3;$i<sqrt($n);$i++)
{
    while($n/$i==0)
    {
        echo $i,"\t ";
        $n/=$i;
    }
}
if($n>2)
{
    echo $n," ";
}
}

?>