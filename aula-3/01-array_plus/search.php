<?php

$a=array("a"=>"red","b"=>"green","c"=>"blue");
$retorno = array_search("red",$a);

var_dump($retorno);

$b=array("red","green","blue");
$retorno = array_search("redr",$b);

var_dump($retorno);


$c=array("red","green","blue");
$retorno = array_search("redo",$c);

var_dump($retorno);

var_dump(in_array("blue", $c));

?>