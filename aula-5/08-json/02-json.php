<?php
$jsonobj = '{"Idade":35,"Nome":"Thiago","Sobrenome":"Henrique"}';

$obj = json_decode($jsonobj);

var_dump($obj->Nome);
?>