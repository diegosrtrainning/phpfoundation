<?php

// array_combine(keys, values)
$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");

$c=array_combine($fname,$age);
print_r($c);

/*Array
(
    [Peter] => 35
    [Ben] => 37
    [Joe] => 43
)*/


?>