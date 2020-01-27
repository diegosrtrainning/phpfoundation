<?php
//Lendo arquivo caracter por caracter

$myfile = fopen(__DIR__."/temp/teste1.txt", "r") or die("Unable to open file!");

while(!feof($myfile)) {
    echo fgets($myfile);
}

fclose($myfile);
?>