<?php
$myfile = fopen(__DIR__."/temp/teste1.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize(__DIR__."/temp/teste1.txt"));
fclose($myfile);
?>