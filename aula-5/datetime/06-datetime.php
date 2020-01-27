<?php
$date1=date_create("2019-01-01");
$date2=date_create("2020-01-01");
$diff=date_diff($date1,$date2);

print_r($diff->days);

?>