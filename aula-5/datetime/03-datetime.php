<?php
$d=strtotime("tomorrow");
echo date("Y-m-d H:i:sa", $d) . "\n";

$d=strtotime("next Saturday");
echo date("Y-m-d H:i:sa", $d) . "\n";

$d=strtotime("+3 Months");
echo date("Y-m-d H:i:sa", $d) . "\n";
?>