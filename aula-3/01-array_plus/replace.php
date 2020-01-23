<?php
$a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_replace($a1,$a2));

echo "\n";

$a3=array("a"=> "red", "b"=>"green");
$a4=array("a"=>"blue","b"=>"yellow", "c"=>"pink");
$resultado =  array_replace($a3,$a4);
print_r($resultado);

?>