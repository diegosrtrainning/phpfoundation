<?php
//Lendo uma linha do arquivo

$myfile = fopen(__DIR__."/temp/teste1.txt", "r") or die("Unable to open file!");
echo fgets($myfile,filesize(__DIR__."/temp/teste1.txt"));
fclose($myfile);
?>