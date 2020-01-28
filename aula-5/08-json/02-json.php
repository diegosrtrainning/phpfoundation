<?php
$jsonobj = '[
    {"Idade":35,"Nome":"Thiago","Sobrenome":"Henrique"},
    {"Idade":3,"Nome":"mmm","Sobrenome":"kkk"}
]';

$obj = json_decode($jsonobj);

var_dump($obj);
//var_dump($obj->Nome);
?>