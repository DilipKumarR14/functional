<?php
 $win = 0;
 $loss = 0;
 $i = 0;
 while ($i < $trails && $stack > 0 && $stack <= $goal) {
     $d = rand(1, 10);
     if ($d < 5) {
         $loss++;
         $stack--;
     } else {
         $win++;
         $stack++;
     }
     $i++;
 }
 echo $i;
 echo "winning chance is " . ($win / $trails) * 100;
 echo "\n" . $win . "\n";
 echo "lossing chance is " . ($loss / $trails) * 100;
 echo "\n" . $loss . "\n";
?>