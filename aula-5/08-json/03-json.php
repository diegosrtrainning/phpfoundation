<?php

$jsonobj = '{"Idade":35,"Nome":"Thiago","Sobrenome":"Henrique"}';

// parametro true converte em array
$obj = json_decode($jsonobj, true);

var_dump($obj);
?>