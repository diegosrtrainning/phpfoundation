<?php
$jsonobj = '{"Idade":35,"Nome":"Thiago","Sobrenome":"Henrique"}';

$obj = json_decode($jsonobj);

foreach($obj as $key => $value) {
    echo $key . " => " . $value . "\n";
  }
?>