<?php
$arquivo = date("Y-m-d H-m-sa") . ".txt";
$myfile = fopen(__DIR__."\\temp\\". $arquivo, "w")  or die("Unable to open file!");
$txt = "Anna Raio\n";
fwrite($myfile, $txt);
$txt = "Zé Trovão\n";
fwrite($myfile, $txt);
fclose($myfile);
?>