<?php

// Complementado arquivo
$arquivo = date("Y-m-d") . ".txt";
$myfile = __DIR__."\\temp\\". $arquivo;

$current = file_get_contents($myfile);
$current .= "Anne\n";
file_put_contents($myfile, $current);
?>