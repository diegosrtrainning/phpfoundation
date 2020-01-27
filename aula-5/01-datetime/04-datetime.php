<?php

date_default_timezone_set("America/Recife");    

$startdate = strtotime("Today");
$enddate = strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
  echo date("M d", $startdate) . "\n";
  $startdate = strtotime("+1 week", $startdate);
}




?>