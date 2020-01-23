<?php
$a1=array("a"=>"red","b"=>"green");
$a2=array("c"=>"blue","b"=>"yellow");

echo "Com adição (+)";
print_r($a1+$a2);

echo "Com merge";
print_r(array_merge($a1,$a2));

?>