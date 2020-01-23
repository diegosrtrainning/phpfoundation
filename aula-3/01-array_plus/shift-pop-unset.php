<?php

echo "============ REMOVE O PRIMEIRO ============= \n";
$arr=array("a"=>"red","b"=>"green","c"=>"blue");

array_shift($arr);
print_r ($arr);

array_shift($arr);
print_r ($arr);


echo PHP_EOL;

echo "============ REMOVE O ÚLTIMO ============= \n";
$arr2=array("red","green","blue");

array_pop($arr2);
print_r($arr2);

array_pop($arr2);
print_r($arr2);

echo "============ REMOVE POR INDICE ============= \n";
$arr3=array("red","green","blue");

unset($arr3[1]);
print_r($arr3);

$arr3 = array_values($arr3);
print_r($arr3);


$arr4=array("Pão"=>"2.30","Leite"=>"3.9", "Frutas"=> "25.0");

unset($arr4["Leite"]);

foreach ($arr4 as $key => $value) {
    echo "$key:$value\n";    
}

print_r($arr4);

$arr3 = array_values($arr4);
print_r($arr4);

?>