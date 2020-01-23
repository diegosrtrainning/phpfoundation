<?php

echo "Sort Alphanumerico\n";
$cars = array("Volvo", "BMW", "Toyota");
$carSort = sort($cars);

echo var_dump($carSort);
echo print_r($cars);

echo "\nSort Numerico\n";
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
echo print_r($numbers);


echo "\nSort Numerico Descendent\n";
$numbers2 = array(4, 6, 2, 22, 11);
rsort($numbers2);
echo print_r($numbers2);

echo "\nSort Ascendente Associativo por valor\n";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
echo print_r($age);

echo "\nSort Descendente Associativo por valor\n";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);
echo print_r($age);



echo "\nSort Ascendente Associativo por Chave (key)\n";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);
echo print_r($age);

echo "\nSort Descendente Associativo por valor Chave (key)\n";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);
echo print_r($age);

?>