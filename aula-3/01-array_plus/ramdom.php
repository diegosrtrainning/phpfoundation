<?php
$a=array("red","green","blue","yellow","brown");
$random_keys=array_rand($a,4);

print_r($a);
echo PHP_EOL;

 echo $a[$random_keys[0]]."<br>";
 echo $a[$random_keys[1]]."<br>";
 echo $a[$random_keys[2]];


?>