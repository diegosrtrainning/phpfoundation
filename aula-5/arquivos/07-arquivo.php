<?php

//Sobreescrevendo arquivo

$arquivo = date("Y-m-d") . ".txt";
$myfile = fopen(__DIR__."\\temp\\". $arquivo, "wb")  or die("Unable to open file!");
$txt = "Anna Raio 2\n";
fwrite($myfile, $txt);
$txt = "Zé Trovão\n";
fwrite($myfile, $txt);
fclose($myfile);
?>