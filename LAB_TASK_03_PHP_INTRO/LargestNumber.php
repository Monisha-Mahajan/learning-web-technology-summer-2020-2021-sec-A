<?php
$a = 5;
$b = 20;
$c = 80;

echo "The numbers are a = $a, b = $b, c = $c <br>";
if(($a > $b) && ($a > $c)) 
 echo "a = $a is the largest number";

else if($b > $c) 
 echo "b = $b is the largest number";

else
 echo "c = $c is the largest number";
?>